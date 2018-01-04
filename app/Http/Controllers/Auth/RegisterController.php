<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

    protected function validator(array $data)
    {
        $messages = [
            'required' => 'Field :attribute tidak boleh kosong',
            'name.required' => 'Field nama tidak boleh kosong',
        ];

        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|min:6|max:20|confirmed',
        ], $messages);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    public function register(Request $request){
        $validator = $this->validator($request->all());

        if ($validator->fails())
        {
            foreach($validator->messages()->getmessages() as $message){
                if($errorMessage != ""){
                    $errorMessage = $errorMessage."\n".$message[0];
                } else{
                    $errorMessage = $message[0];
                }
            }

            return response()->json(['status' => 'error', 'data' => null, 'error' => ['code' => 422, 'message' => $errorMessage]]);
        }

        $checkEmailIfExist = User::where('email', $request->input('email'))->first();
        
        if($checkEmailIfExist){
            return response()->json(['status' => 'error', 'data' => null, 'error' => ['code' => 409, 'message' => "E-mail sudah terdaftar"]]);
        } else{
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            if($user){
                try {
                    $token = JWTAuth::fromUser($user);
                } catch (\Exception $e) {
                    return response()->json(['status' => 'error', 'data' => null, 'error' => ['code' => 500, 'message' => 'Terjadi kesalahan sistem']]);
                }

                $payload = JWTAuth::getPayload($token);
                $expirationTime = $payload['exp'];

                return response()->json(['status' => 'success', 'data' => ['message' => 'Akun berhasil didaftarkan', 'id' => $user->id, 'name' => $user->name, 'email' => $user->email, 'password' => $user->password, 'token' => $token, 'token_expiration_time' => $expirationTime], 'error' => null]);
            } else{
                return response()->json(['status' => 'error', 'data' => null, 'error' => ['code' => 500, 'message' => 'Terjadi kesalahan sistem, gagal melakukan registrasi akun']]);
            }
        }
    }
}
