@extends('layouts.layouts')
@section('title', 'simple board')

@section('content')

@if(session('message'))
  {{session('message')}}
@endif

<h1>Posts</h1>


@foreach($posts as $post)
  <div>
    <a href="/posts/{{$post->id}}">{{$post->title}}</a>
    <a href="/posts/{{$post->id}}/edit">Edit</a>

    <form action="/posts/{{$post->id}}" method="POST" onsubmit="if(confirm('Delete ok?')){return true}else{return false};">
      <input type="hidden" name="_method" value="DELETE">
      @csrf
      <input type="submit" class="btn btn-warning" value="Delete">
    </form>
  </div>
@endforeach

<a href="/posts/create">New Post</a>

@endsection