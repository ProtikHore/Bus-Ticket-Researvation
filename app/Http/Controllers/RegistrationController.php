<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Validator;
use App\Alluser;

class RegistrationController extends Controller
{
  public function index()
  {
    return view('registration.index');
  }

  public function store(Request $request)
  {
    // $username = $request->username;
    // $email = $request->email;
    // $password = $request->password;
    // $confirm_password = $request->confirm_password;
    // echo $username;

    $user = new Alluser();
    $validator = Validator::make($request->all(), [

      'fullname' => 'required',
      'username' => 'required',
      'email'    => 'required | email',
      'password' => 'required|confirmed',


    ]);

    if($validator->fails())
    {
      return redirect()
                ->route('registration.store')
                ->with('errors', $validator->errors());
    }


    $user->full_name = $request->fullname;
    $user->username = $request->username;
    $user->email = $request->email;
    $user->password = $request->password;
    $user->role = 'user';
    $user->save();
    return view('login.index');
  }
}
