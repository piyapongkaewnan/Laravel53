<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ArticlesController extends BaseController {

    public function index() {
        return view('user.index');
    }

    public function show() {
        return view('user.login');
    }

    public function create() {
        return '<h1>create articles page </h1>';
    }

    public function store() {
        return '<h1>store articles page </h1>';
    }

    public function edit() {
        return '<h1>edit articles page </h1>';
    }

    public function update() {
        return '<h1>update articles page </h1>';
    }

    public function detroy() {
        return '<h1>create articles page </h1>';
    }

}
