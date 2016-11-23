<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class KeyinController extends BaseController {

    public function index() {
        return view('keyin/master/index');
    }

    public function showKeyinMaster($table = null) {
        return view('keyin/master/index', ['table' => $table]);
    }

    public function showProfile() {
        return '<h1>Keyin page welcome</h1>';
    }

}
