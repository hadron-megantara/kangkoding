<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
  public function aboutUs()
  {
      return view('general.about-us');
  }

  public function contactUs()
  {
      return view('general.contact-us');
  }

  public function portfolio()
  {
      return view('general.portfolio');
  }
}
