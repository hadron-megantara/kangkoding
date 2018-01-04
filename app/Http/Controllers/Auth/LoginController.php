<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
    }

    protected function validator(array $data)
    {
        $messages = [
            'required' => 'Field :attribute tidak boleh kosong',
            'name.required' => 'Field nama tidak boleh kosong',
        ];

        return Validator::make($data, [
            'email' => 'required|email|max:255',
            'password' => 'required|min:6|max:20|confirmed',
        ], $messages);
    }

    public function login(Request $request){
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

        $user = User::where('email', $request->email)->first();

        if(!$user){
            return response()->json(['status' => 'error', 'data' => null, 'error' => ['code' => 404, 'message' => 'Email tidak terdaftar']]);
        } else{
            if(Hash::check($request->password, $user->password)){
                if($user->verified == 0){
                    return response()->json(['status' => 'error', 'data' => null, 'error' => ['code' => 403, 'message' => 'Akun Anda belum aktif, silahkan cek email Anda untuk aktivasi']]);
                }
            } else{
                if($redirect != env('APP_RESOURCE_ANDROID', 'android') && $redirect != env('APP_RESOURCE_IOS', 'ios')){
                    return redirect('login')->with('error', 'Email atau kata kunci salah');
                } else{
                    return response()->json(['status' => 'error', 'data' => null, 'error' => ['code' => 401, 'message' => 'Email atau kata kunci salah']]);
                }
            }
        }
    }
}
