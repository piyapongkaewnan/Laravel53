<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class UserController extends BaseController {

    public function index() {
        return view('user.index');
    }
    
    public function login() {
        return view('user.login');
    }

    public function showProfile() {
        return '<h1>User page profile</h1>';
    }

}
