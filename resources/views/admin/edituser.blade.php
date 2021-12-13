@extends('../admin/layout')

@section('title' ,'edit User')

@section('content')
<h3 class="text-center">Edit User</h3>
<div class="container p-5">

<form action="/edituser/" method="post">
  @csrf
  <input type="hidden" name="idd" value="{{$user->id}}">
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="{{$user->email}}" name="email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
  
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" aria-describedby="" placeholder="Enter name" value="{{$user->name}}" name="nam">
        {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
      </div>


      <div class="form-group">
        <label for="sel1">Role:</label>
        <select class="form-control" id="sel1" name="role">
          <option value="{{$user->role}}">{{$user->role}}</option>
          <option>hr</option>
          <option>admin</option>
          <option>senior</option>
          <option>junior</option>
        </select>
      </div> 
    
    </br>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
</div>
@endsection