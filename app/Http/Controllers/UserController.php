<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function login(Request $request){
        $login=$request->get('login');
        $password=$request->get('password');
        $output=User::where('email',$login)->where('password',$password)->first();
      
        if (!(is_null($output))) {
            session()->put('logininfo',$output);
           
           return redirect(route('dashboard'));
        }
        else{
            return redirect(route('adminpanel'));
        }
    }
    public function logout(Request $request){
        Session()->flush();
        return redirect(route('adminpanel'));
    }
}
