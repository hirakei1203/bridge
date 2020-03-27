<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Patient;
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
    $user_data = ['name' => $post['name'], 'email' => 'sample@gmail.com', 'role' => '2'];
    User::insert($user_data);

    // patientテーブルへの保存
    $patient_data = ['user_id' => \Auth::id(), 'name' => $post['name'], 'age' => $post['age'], 'sympton' => $post['sympthon'], 'image' => $request->file('image')->hashName()];    
    Patient::insert($patient_data);

    // dentist_patientテーブル（中間テーブル）への保存
    $relation_data = ['^]']

    return redirect('mypatient');
  }

}

?>