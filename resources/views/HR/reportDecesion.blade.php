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
        <th scope="col" class="text-dark">Self Rating</th>
        <th scope="col" class="text-dark">evaluate</th>
        
      </tr>
    </thead>


@foreach ($user as $user)
@php
$cont=\App\Models\User::where('id' ,$user)->first();
$self=\App\Models\selfEvalution::where('user_id' ,$user)->first();
$chk=\App\Models\userevaluation::where('user_id' ,$user)->first();
// dump($self);

    //  echo $user." ". $cont->name."<br>";
@endphp
<tr>
    <th scope="row" class="text-dark">{{$user}}</th>
    <td class="text-dark">{{$cont->name}}</td>
    <td class="text-dark">{{$cont->email}}</td>
    <td class="text-dark">{{$cont->role}}</td>
    @if(empty($self->percentage))
    <td class="text-dark">0.0</td>
    @else
    <td class="text-dark">{{$self->percentage}}</td>
    @endif
    <td>
      @if(empty($chk))
      <a href="/hr/evaluate/{{$user}}" class="btn btn-primary">evalute</a>
      @else
      <a href="" class="btn btn-success">evaluated</a>
      @endif
    </td>
  </tr>
@endforeach
</tbody>
</table>

</div>

@endsection