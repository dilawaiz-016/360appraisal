@extends('..HR.mainn')


@section('title' ,'HR')
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
            <th scope="col" class="text-dark">User</th>
            <th scope="col" class="text-dark">Result</th>
            <th scope="col" class="text-dark">Decision</th>
     
          </tr>
        </thead>
        @php
        $num="1";
      @endphp
         @foreach($dataa as $usr)
          <tr>
            {{-- <th scope="row" class="text-dark">{{$num}}</th> --}}
            <td class="text-dark">
            @php 
              $users = DB::table('users')
             ->where('id', '=', $usr->user_id)
             ->pluck('name');
            @endphp
            {{$users[0]}}
            </td>
            <td class="text-dark">
                {{-- @php 
                $users = DB::table('users')
               ->where('id', '=', $usr->to_user_id)
               ->pluck('name');
              @endphp --}}
              {{$usr->result}}
            </td>
            <td class="text-dark">{{$usr->decesion}}</td>
         
          </tr>
    
         @endforeach
        </tbody>
      </table>
    
    </div>


@endsection