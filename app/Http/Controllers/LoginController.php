<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Alluser;

class LoginController extends Controller
{
  public function index()
  {
    return view('login.index');
  }

  public function verify(Request $request)
  {
    //$pass = bcrypt($request->password);
    //echo $pass;
    //die();
    $alluser = DB::table('allusers')
    		      ->where('username', $request->username)
    		      ->where('password', $request->password)
    		      ->first();

        // var_dump($alluser);
        // die();

    if($alluser != null)
    {
      $request->session()->put('loggedUser', $alluser);
      if($request->session()->get('loggedUser')->role != "admin")
      {
        return redirect()->route('home.index');
      }
      else
      {
        return redirect()->route('admin.index');
      }

    }
    else
    {
      $request->session()->flash('username', $request->UserName);
      $request->session()->flash('message', 'Invalid username or password');
      return redirect()->route('login.index');
    }
  }
}
