@extends('layouts.main')

@section('page_title','Create Articles')

@section('title')
 <a href="{{ url('articles/') }} "> <i class="fa fa-backward"></i> Back</a> Write a new Articles
@stop

@section('content')
{!! Form::open(array('url' => 'articles')) !!}
<div class="form-group">
{!!  Form::label('title', 'Article Title') !!}
{!!  Form::text('title' , null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
{!!  Form::label('body', 'Article Body') !!}
{!!  Form::textarea('body', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
{!!  Form::label('published_at', 'Publish on') !!}
{!!  Form::input('date', 'published_at', \Carbon\Carbon::now()->format('Y-m-d') ,['class'=>'form-control']) !!}
</div>
{!! Form::submit('Click Me!') !!}
{!! Form::close() !!}
@stop
