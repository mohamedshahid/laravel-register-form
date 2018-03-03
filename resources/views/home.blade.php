@extends('inc.header')

@section('title','Home')

@section('content')
<div class="row">
  <div class="offset-3 col-md-6 text-center jumbotron">
    <h1>Welcome To Laravel</h1><br>
    <a href="{{url('/register')}}" class="btn btn-primary">Register</a>
    <a href="{{url('/list')}}" class="btn btn-success">List</a>
  </div>
</div>
@endsection