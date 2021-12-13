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
<h1 class="text-center">Collect reports</h1>
<div class="container p-5 table-wrapper-scroll-y my-custom-scrollbar">

    <table class="table table-hover " id="myTable">
        <thead>
          <tr>
            <th scope="col" class="text-dark">id</th>
            <th scope="col" class="text-dark">Name</th>
            <th scope="col" class="text-dark">Average</th>
            <th scope="col" class="text-dark">no_of_users</th>
            
         
          </tr>
        </thead>
        @php
        $num="1";
      @endphp
         @foreach($user as $usr)
          <tr>
            <th scope="row" class="text-dark">{{$num}}</th>
            <td class="text-dark">{{$usr->name}}</td>
            <td class="text-dark">{{$usr->average}}</td>
            <td class="text-dark">{{$usr->total}}</td>
            
          </tr>
         @endforeach
        </tbody>
      </table>
    
    </div>


@endsection