@extends('inc.header')

@section('title','Register')

@section('content')
<div class="row">
  <div class="offset-2 col-md-8 text-center card border-dark mb-3">
    <div class="card-header">Registration Form</div>
    <div class="card-body">
    {{Form::open(['url'=>'/post','method'=>'POST'])}}
    {{Form::text('fname','',['placeholder'=>'First Name *','class'=>'form-control'])}}<br>
    @if($errors->any())
      {!!$errors->first('fname',"<li class='alert alert-danger'>:message</li>")!!}
    @endif
    {{Form::text('lname','',['placeholder'=>'Last Name *','class'=>'form-control'])}}<br>
    @if($errors->any())
      {!!$errors->first('lname',"<li class='alert alert-danger'>:message</li>")!!}
    @endif
    {{Form::text('email','',['placeholder'=>'Email ID *','class'=>'form-control'])}}<br>
    @if($errors->any())
      {!!$errors->first('email',"<li class='alert alert-danger'>:message</li>")!!}
    @endif
    {{Form::text('phone','',['placeholder'=>'Phone *','class'=>'form-control'])}}<br>
    @if($errors->any())
      {!!$errors->first('phone',"<li class='alert alert-danger'>:message</li>")!!}
    @endif
    <input type="submit" value="Submit" class="btn btn-primary">
    <input type="reset" value="Clear" class="btn btn-primary">
    {{Form::close()}}
    </div>
  </div>
</div>
@endsection