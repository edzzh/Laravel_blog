@extends('layouts.app')
@section('title')
  Lion Heart
@endsection
@section('content')
  @if(Auth::guest())
  <div class="jumbotron text-center">
    <h1>{{$title}}</h1>
    <p>
      <a class="btn btn-primary btn-lg" href="{{ route('login') }}" role="button">Login</a>
      <a class="btn btn-success btn-lg" href="{{ route('register') }}" role="button">Register</a>
    </p>
  </div>
  @else
    <div class="jumbotron text-center">
      <div class="background-img"></div>
      <h1>{{$title}}</h1>
    </div>
  @endif
@endsection
