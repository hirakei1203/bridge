<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
  public function home(){
    return view('home');
  }

  public function index(){
    return view('index');
  }



}

?>