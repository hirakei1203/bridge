<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;

class PatientController extends Controller
{
  public function patient_index(){
    return view('patient_index');
  }



}

?>