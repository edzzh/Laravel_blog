@extends('layouts.app')
@section('title')
  Services
@endsection
@section('content')
    <h1>{{$title}}</h1>
    <div class="row">
      <div class="col-md-12 col-sm-12 social-links">
        <a class="social" href="https://www.facebook.com/edgarshartmanis" target="_blank">
             <div class="front">
        		<i class="fa fa-facebook"></i>
             </div>
             <div class="back">
        		<i class="fa fa-facebook"></i>
             </div>
        </a>

        <a class="social social-twitter" href="https://twitter.com/EdzzH" target="_blank">
             <div class="front">
        		<i class="fa fa-twitter"></i>
             </div>
             <div class="back">
        		<i class="fa fa-twitter"></i>
             </div>
        </a>

        <a class="social social-github" href="https://github.com/edzzh" target="_blank">
             <div class="front">
        		<i class="fa fa-github"></i>
             </div>
             <div class="back">
        		<i class="fa fa-github"></i>
             </div>
        </a>
      </div>
    </div>


@endsection
