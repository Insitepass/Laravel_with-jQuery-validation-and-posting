<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Models\User;

class userController extends Controller{
  public function index() {
   return view ('add-new-user');
  }
  public function store(Request $request) {

    $validatedData = $request->validate([
      'name' => 'required',
      'email' => 'required|email:rfc,dns', 
    ]);
    
    $form = new User;
    $form-> name = $request->name;
    $form-> email = $request->email;
    $form->save();
    return redirect('users-table')->with('status','New user Added');

  }
  //display users in a blade view
  public function tableview () {

 $data=user::all();
  return view('users-table',compact('data'));

  }
}

 
 