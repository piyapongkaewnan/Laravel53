<?php

namespace App\Http\Controllers;

use Request;
use App\Articles;

class ArticlesController extends Controller {

    public function __construct() {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function index() {
        $articles = Articles::get();
        //dd($articles);
        return view('articles.index', compact('articles'));
    }

    public function show($id) {
        $article = Articles::findOrFail($id);
        //dd($article);
        if (empty($article))
            abort(404);
        return view('articles.show', compact('article'));
    }

    public function create() {
        return view('articales.create');
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
