<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Patient;
use App\Dentist;
// use App\Http\Requests\Request;

class UserController extends Controller
{
  public function home(){
    return view('home');
  }

  public function index(){
    return view('index');
  }

  public function mypatient(){

    $current_dentist = Dentist::where('user_id', \Auth::id())->first();
    $patients_in_charge = $current_dentist->patient;

    return view('mypatient', compact('patients_in_charge'));
  }

  public function newmypatient(){
    return view('newmypatientform');
  }
  
  public function mypatientCreate(Request $request){
    $post = $request->all();
  
    $request->file('image')->store('/public/images');
  
    // userテーブルへの保存
    $user_data = ['name' => $post['name'], 'email' => "{$post['name']}.sample@gmail.com", 'role' => '2', 'password' => 'notauthorized', 'created_at' => now(), 'updated_at' => now()];
    User::insert($user_data);

    // patientテーブルへの保存
    $count_user_table = User::orderby('id', 'desc')->first()->id;
    $patient_data = ['user_id' => $count_user_table, 'name' => $post['name'], 'age' => $post['age'], 'sympton' => $post['sympthon'], 'image' => $request->file('image')->hashName(), 'created_at' => now(), 'updated_at' => now()];    
    Patient::insert($patient_data);

    // dentist_patientテーブル（中間テーブル）への保存
    $new_patient = Patient::orderby('id', 'desc')->first();
    $current_dentist = Dentist::where('user_id', \Auth::id())->first();
    $current_dentist->patient()->attach(['patient_id' => $new_patient->id], 
                                    ['dentist_id' => $current_dentist->id]);
    
    return redirect('mypatient');
  }

  public function myPatientEdit(Request $request){
    $patient_tobe_edit = Patient::find($request->id);
    return view('mypatient_edit', compact('patient_tobe_edit'));
  }

  public function myPatientUpdate(Request $request){
    $patient_tobe_updated = Patient::find($request->id);
    $patient_tobe_updated->name = $request->name;
    $patient_tobe_updated->age = $request->age;
    if(!empty($request->file('image'))){
      $patient_tobe_updated->image = $request->file('image')->hashName();
    }
    $patient_tobe_updated->sympton = $request->sympthon;
    $patient_tobe_updated->save();

    $request->file('image')->store('/public/images');
    
    return redirect('mypatient');
  }

}

?>