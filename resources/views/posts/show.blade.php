@extends('layouts.app')
@section('title')
  Posts
@endsection
@section('content')
  <a href="/posts" class="btn btn-default" role="button">Go Back</a>
  <h1 class="text-center">{{$post->title}}</h1>
  <div class="image">
    <img src="/storage/cover_images/{{$post->cover_image}}" style="width:45%;"/>
  </div>
  <br />
  <hr />
    <div class="">
      {!! $post->body !!}
    </div>
  <hr />
  <small class="pull-right">Written on {{$post->created_at->format('d.m.Y')}}</small>
  <br />
  <small class="pull-right">Created by {{$post->user->name}}</small>
  <hr />
    @if(!Auth::guest())
      @if(Auth::user()->id == $post->user_id)
      <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
      {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
      {!! Form::close()!!}
      <hr />
      @endif
    @endif
  <strong>Comments:</strong>
  <div class="row">
    <div class="col-md-12 col-sm-12">
      @include('inc.disqus')
    </div>
  </div>
@endsection
