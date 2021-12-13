@extends('..HR.mainn')


@section('title' ,'HR')


@section('content')

@if (session()->has('success'))
<div class="alert alert-dismissable alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <strong>
        {!! session()->get('success') !!}
    </strong>
</div>

@endif
<h1 class="alert alert-success text-center">Welcome to Hr</h1>

<div class="container">
<form action="/createuser" method="post">
    @csrf
<div class="form-group">
    <label for="exampleInputname">Name</label>
    <input type="text" class="form-control" id="exampleInputname" aria-describedby="emailHelp" placeholder="Enter name" name="nam">
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass">
  </div>

  <div class="form-group mb-2">
    <label for="exampleFormControlSelect1">Role</label>
    <select class="form-control" id="exampleFormControlSelect1" name="role">
      <option value="senior">senior</option>
      <option value="junior">junior</option>
     
     
    </select>
  </div>
  <button type="submit" class="btn btn-primary" style="background:#43A350;">add</button>
</form>
</div>

@endsection
