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

    // 作成予定
    // $mypatients = User::where('user_id' = Auth::id())->get();
    // return view('index', compact('mypatients'));

    return view('mypatient');
  }

  public function newmypatient(){
    return view('newmypatientform');
  }
  
  public function mypatientCreate(Request $request){
    $post = $request->all();
    // dd($post);

    $request->file('image')->store('/public/images');
    // 以下のuser_idはログインユーザーのidではなく、userテーブルにおける新規idが必要
    // ログインユーザーのidは、ユーザーidから歯科医idを特定し、中間テーブルにログインユーザーと本患者のidを結ぶつける必要がある
    
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
    // $relation_data = ['dentist_id' => \Auth::id(), 'patient_id' => $new_Patient_id];
    $current_dentist->patient()->attach(['patient_id' => $new_patient->id], 
                                    ['dentist_id' => $current_dentist->id]);
    

    return redirect('mypatient');
  }

}

?>