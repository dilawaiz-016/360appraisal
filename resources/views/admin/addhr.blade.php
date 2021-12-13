@extends('../admin/layout')

@section('title' ,'add hr')

@section('content')
<h3 class="text-center">Add HR</h3>
<div class="container p-5">

<form action="/addhr/" method="post">
  @csrf
 
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="" name="email" required>
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
  
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" aria-describedby="" placeholder="Enter name" value="" name="nam" required>
        {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
      </div>




      <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required name="passw">
  </div>
    
    </br>
    <button type="submit" class="btn" style="background:#43A350;color:white;">add</button>
  </form>
</div>
@endsection