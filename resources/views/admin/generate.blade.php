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
<h1 class="text-center">Generate reports</h1>

<div class="container p-5  table-wrapper-scroll-y my-custom-scrollbar">

    <table class="table table-hover " id="myTable">
        <thead>
          <tr>
            <th scope="col" class="text-dark">id</th>
            <th scope="col" class="text-dark">Name</th>
            <th scope="col" class="text-dark">Average</th>
            <th scope="col" class="text-dark">no_of_users</th>
            <th scope="col" class="text-dark">Send</th>
         
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
            <td>
              @php
                $cont=\App\Models\hruser::where('user_id' ,$usr->to_user_id)->first();
                // dump($cont ,$usr->to_user_id);
              @endphp
              
               @if($cont)
                 <a href="#" class="btn btn-success" >Sent</a>
                
              @else

              <form action="/hr/{{$usr->to_user_id}}" method="post">
                @csrf
                <input type="hidden" name="id" />
                <input href="" class="btn btn-primary" type="submit" value="Send">
              </form>
              @endif
                
            </td>
          </tr>
         @endforeach
        </tbody>
      </table>
    
    </div>



@endsection