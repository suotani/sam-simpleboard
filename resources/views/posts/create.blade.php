@extends('layouts.layouts')
@section('title', 'simple board')

@section('content')

<form method="POST" action="/posts">
  @csrf
  <input type="text" name="title">
  <input type="text" name="content">
  <input type="submit">
</form>
@endsection