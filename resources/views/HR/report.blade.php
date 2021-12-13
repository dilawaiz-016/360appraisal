@extends('..HR.mainn')


@section('title' ,'HR')


@section('content')
<h1 class="text-center"></h1>
<div class="container p-5">

<table class="table table-hover " id="myTable">
    <thead>
      <tr>
        <th scope="col" class="text-dark">id</th>
        <th scope="col" class="text-dark">Name</th>
        <th scope="col" class="text-dark">Email</th>
        <th scope="col" class="text-dark">Role</th>
        
      </tr>
    </thead>


@foreach ($user as $user)
@php
$cont=\App\Models\User::where('id' ,$user)->first();
$self=\App\Models\selfEvalution::where('user_id' ,$user)->first();

// dump($cont->name);

    //  echo $user." ". $cont->name."<br>";
@endphp
<tr>
    <th scope="row" class="text-dark">{{$user}}</th>
    <td class="text-dark">{{$cont->name}}</td>
    <td class="text-dark">{{$cont->email}}</td>
    <td class="text-dark">{{$cont->role}}</td>
    {{-- <td>
      <a href="" class="btn btn-primary">edit</a>
      <a href="" class="btn btn-danger">del</a>
    </td> --}}
  </tr>
@endforeach
</tbody>
</table>

</div>

@endsection