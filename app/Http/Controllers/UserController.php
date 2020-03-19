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

  public function mypatient(){

    // 作成予定
    // $mypatients = User::where('dentisit_id = current_user.id')->orderby('latest_treatment_date', 'DESC')->get();
    // return view('index', compact('mypatients'));

    return view('mypatient');
  }

}

?>