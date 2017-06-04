@extends('layouts.app')
@section('title')
  Index
@endsection
@section('content')
  @if(Auth::guest())
  <div class="jumbotron text-center">
    <h1>{{$title}}</h1>
    <p>
      This is a Laravel application from the "Laravel From Scratch" Youtube Series
    </p>
    <p>
      <a class="btn btn-primary btn-lg" href="{{ route('login') }}" role="button">Login</a>
      <a class="btn btn-success btn-lg" href="{{ route('register') }}" role="button">Register</a>
    </p>
  </div>
  @else
    <div class="jumbotron text-center">
      <h1>{{$title}}</h1>
      <p>
        This is a Laravel application from the "Laravel From Scratch" Youtube Series
      </p>
    </div>
  @endif
@endsection
