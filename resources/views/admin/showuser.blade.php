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

<div class="container table-wrapper-scroll-y my-custom-scrollbar p-5">
 
<table class="table table-hover table-responsive" id="myTable">
    <thead>
      <tr>
        {{-- <th scope="col" class="text-dark">id</th> --}}
        <th scope="col" class="text-dark">Name</th>
        <th scope="col" class="text-dark">Email</th>
        <th scope="col" class="text-dark">Role</th>
        <th scope="col" class="text-dark">Action</th>
      </tr>
    </thead>
    @php
    $num="1";
  @endphp
     @foreach($user as $usr)
      <tr>
        {{-- <th scope="row" class="text-dark">{{$num}}</th> --}}
        <td class="text-dark">{{$usr->name}}</td>
        <td class="text-dark">{{$usr->email}}</td>
        <td class="text-dark">{{$usr->role}}</td>
        <td>
          
          <a href="edituser/{{$usr->id}}" class="btn btn-primary">edit</a>
          {{-- <a href="" class="btn btn-danger">del</a> --}}
          <a href="/deluser/{{$usr->id}}" class="button delete-confirm  btn btn-danger">del</a>
        </td>
      </tr>

     @endforeach
    </tbody>
  </table>

</div>
  @endsection