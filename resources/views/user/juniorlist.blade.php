
@extends('../master')

@section('title' ,'Managment List')
@section('css')
body {
  background-color: #eeeee4

}



.dots {
  height: 20px;
  width: 20px;
  background-color: green;
  border-radius: 50%;
  border: 2px solid #fff;
  right: -4px;
  bottom: 8px
}

.box-ellipse {
  background-color: #ebedf0;
  padding-right: 10px;
  color: #000;
  padding-left: 10px;
  padding-top: 2px;
  padding-bottom: 2px;
  border-radius: 4px;
  cursor: pointer
}

.box-pensil {
  background-color: blue;
  color: #fff;
  cursor: pointer;
  font-size: 15px;
  padding-right: 10px;
  padding-left: 10px;
  padding-top: 2px;
  padding-bottom: 2px;
  border-radius: 4px
}
@endsection
@section('content')
<h1 class="bg-dark text-center text-white p-3 mb-2">Management List</h1>
<div class="container">
@foreach($user as $usr)
<div class="jumbotron">

{{-- <img src="{{asset('/upload/user/'.$usr->image)}}" style="width:150px; height:150px; border-radius:50%;">
<small>{{$usr->name}}</small>

<hr class="my-4">  --}}
<div class="container mt-5">
  <div class="height-100 row d-flex justify-content-center align-items-center">
      <div class="col-md-7">
          <div class="p-3 bg-white rounded">
              <div class="d-flex justify-content-between">
                  <div class="d-flex flex-row align-items-center ">
                      <div class="position-relative me-4"> <img src="{{asset('/upload/user/'.$usr->image)}}" width="80" class="rounded-circle"> 
                        {{-- <span class="position-absolute dots"></span> --}}
                       </div>
                      <div class="ml-2">
                          <h5 class="mb-0">{{$usr->name}}</h5> <span>{{$usr->email}}</span>
                          <div class="d-flex flex-row"> <span class="mr-3">{{$usr->role}}
                          </span>
                          
                           <a class=" mx-2" href="/juniormanagment/{{$usr->id}}" >Review</a> 
                         </div>
                      </div>
                      
                  </div>
                  {{-- <div class="mt-2 "> 
                    <span class="box-pensil "><i class="fa fa-pencil"></i></span> </div> --}}
                  <div> </div>
              </div>
          </div>
      </div>
  </div>
</div>

</div>
@endforeach
</div>

@include('../mfooter')
@endsection