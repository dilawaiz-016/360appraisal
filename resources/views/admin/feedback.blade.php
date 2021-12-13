@extends('../admin/layout')

@section('title' ,'admin')
@section('css')

.my-custom-scrollbar {
  position: relative;
  height: 70vh;
  overflow: auto;
  }
  .table-wrapper-scroll-y {
  display: block;
  }
@endsection
@section('content')
<h1 class="text-center">USER FEEDBACK</h1>
<div class="container p-5 table-wrapper-scroll-y my-custom-scrollbar">

<table class="table table-hover table-stripped" id="myTable">
    <thead>
      <tr>
        <th scope="col" class="text-dark">#</th>
        <th scope="col" class="text-dark">User</th>
        <th scope="col" class="text-dark">Subject</th>
        <th scope="col" class="text-dark">Message</th>
        <th scope="col" class="text-dark">Action</th>
      </tr>
    </thead>
    <tbody>
        @php
          $num="1";
        @endphp
     @foreach($user as $usr)
      <tr>
        <th scope="row" class="text-dark">{{$num}}</th>
        <td class="text-dark">{{$usr->User->name}}</td>
        <td class="text-dark">{{$usr->subject}}</td>
        <td class="text-dark">{{$usr->message}}</td>
        <td>
          <a href="/feedback/delete/{{$usr->id}}" class="button delete-confirm  btn btn-danger">del</a>
        </td>
      </tr>
      {{$num++}}
     @endforeach
    </tbody>
  </table>

</div>
  @endsection