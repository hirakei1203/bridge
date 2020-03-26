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
    // $mypatients = User::where('dentisit_id = current_user.id')->orderby('latest_treatment_date', 'DESC')->get();
    // return view('index', compact('mypatients'));

    return view('mypatient');
  }

  public function newmypatient(){
    return view('newmypatientform');
  }
  
  public function mypatientCreate(Request $request){
    $post = $request->all();
    // dd($post);

    // $data = ['user_id' => \Auth::id(), 'title' => $post['title'], 'body' => $post['body']];
    $data = ['user_id' => \Auth::id(), 'name' => $post['name'], 'age' => $post['age'], 'sympton' => $post['sympthon'], 'image' => $post['image']];    
    Patient::insert($data);
    
    return redirect('mypatient');
  }

}

?>