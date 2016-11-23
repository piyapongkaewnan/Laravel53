@extends('layouts.main')

@section('page_title','User')

@section('title') 
User Login
@stop

@section('content') 
{{ Form::open(['url'=>'user/login','class'=>'form-signin','data-toggle'=>"validator"]) }}
{{ Form::text('username','', ['class'=>'form-control','placeholder'=>'Username','required'=>'required']) }}
<br>
{{ Form::password('password', ['class'=>'form-control','placeholder'=>'Password','required'=>'required']) }}
<br>
{{ Form::submit('Log In...',[ 'class'=>'btn btn-primary']) }}
{{ Form::close() }}
@stop
