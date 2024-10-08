<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{   
    public function actionlogout(){
        auth::logout();
        return redirect('/')->with('succes','anda berhasil logout');
    }
}
