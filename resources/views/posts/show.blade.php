@extends('layouts.app')
@section('title')
  Posts
@endsection
@section('content')
  <a href="/posts" class="btn btn-default" role="button">Go Back</a>
  <h1>{{$post->title}}</h1>
  <img src="/storage/cover_images/{{$post->cover_image}}" class="img-responsive" style="width:100%;"/>
  <br />
  <br />
  <hr />
    <div class="">
      {!! $post->body !!}
    </div>
  <hr />
  <small>Written on {{$post->created_at->format('d.m.Y')}}</small>
  <br />
  <small>Created by {{$post->user->name}}</small>
  <hr />
    @if(!Auth::guest())
      @if(Auth::user()->id == $post->user_id)
      <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
      {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
      {!! Form::close()!!}
      @endif
    @endif
@endsection
