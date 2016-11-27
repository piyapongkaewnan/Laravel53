@extends('layouts.main')

@section('page_title','Articles')

@section('title') 
 <a href="{{ url('articles/') }} "> <i class="fa fa-backward"></i> Back</a> Articles List detail  
@stop

@section('content') 

<div class="panel panel-default">
    <div class="panel-heading">
        <i class="fa fa-bullhorn"></i> {{ $article->title }}
    </div>
    <div class="panel-body">{{ $article->body }}</div>
    <div class="panel-footer text-right"> <small><i class="fa fa-calendar"></i> published at : {{ $article->published_at }}</small></div>
</div>
@stop
