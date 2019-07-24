<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function homepage(){
        $variavel = "Home page do sistema";
        return view('welcome', ['title' => $variavel]);
    }

    /**
     *  method the user login VIEW
     */
    public function fazerLogin(){
        return view('user.login');
    }
}
