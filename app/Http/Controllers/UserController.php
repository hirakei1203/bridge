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
    $data = ['user_id' => \Auth::id(), 'name' => $post['name'], 'age' => $post['age'], 'sympton' => $post['sympthon'], 'image' => $request->file('image')->hashName()];    
    Patient::insert($data);
    
    return redirect('mypatient');
  }

}

?>