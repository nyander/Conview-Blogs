@extends('layouts.app')

@section('content')
<div class="jumbortron text-center">
    <h1>{{$title}}</h1>
    <p> This is is a practice process, going to be learning more about laravel so I can develop my skills and understanding. </p> 
    <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
</div>
@endsection