@extends('layouts.layouts')
@section('title', 'simple board')

@section('content')

<h1>Editing Post</h1>
@if($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach($errors->all() as $error)
      <li>{{$error}}</li>
    @endforeach
</div> 
@endif

<form method="POST" action="/posts/{{ $post->id }}">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT">
    <div class="form-group">
        <label for="exampleInputEmail1">Title</label>
        <input type="text" class="form-control" aria-describedby="emailHelp" name="title" value="{{ old('title') == '' ? $post->title : old('title') }}">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Content</label>
        <textarea class="form-control" name="content">{{ old('content') == '' ? $post->title : old('content') }}</textarea>
    </div>
    <button type="submit" class="btn btn-outline-primary">Submit</button>
</form>

<a href="/posts/{{ $post->id }}">Show</a> | 
<a href="/posts">Back</a>

@endsection