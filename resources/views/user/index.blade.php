@extends('layouts.main')

@section('page_title','User')

@section('title') 
User 
@stop

@section('content') 
{{ Form::open(array('url'=>'user/login','class'=>'form-signin')) }}
{{ Form::text('password','',['class'=>'form-control','placeholder'=>'Password']) }}
{{ Form::submit('Click Medd!') }}
{{ Form::close() }}
@stop
