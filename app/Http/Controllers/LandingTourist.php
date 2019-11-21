<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingTourist extends Controller
{
  public function index()
  {
    return view('index');
  }
}
