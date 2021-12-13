@extends('../master')

@section('title' ,'Profiler')

@section('content')

<h2 class="text-center bg-dark text-white p-3">Profile</h2>
@if (session()->has('message'))
<div class="alert alert-dismissable alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <strong>
        {!! session()->get('message') !!}
    </strong>
</div>

@endif
<div class="container p-5">
<form action ="/profupdate/{{Auth::user()->id;}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group p-2">
        <label for="namex">Name</label>
        <input type="text" class="form-control" id="namex" aria-describedby="emailHelp" placeholder="Enter email" value="{{$usr->name}}" name="name">
        
      </div>
  <div class="form-group p-2">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="{{$usr->email}}" readonly name="email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group p-2">
    <label for="rolex">Role</label>
    <input type="text" class="form-control" id="rolexx"  placeholder="" value="{{$usr->role}}" readonly name="role">
    
  </div>
  <div class="form-group p-2">
    <label for="exampleFormControlFile1">image</label>
    <img src="{{asset('/upload/user/'.$usr->image)}}" style="width:150px; height:150px;" class="border border-warning"/><br><br>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" required="required" name="imeg" value="">


    

    
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>

 
<div class="container">
<div class="row">
<div class="col-md-6 col">
@php
// $dat=App\Models\userevaluation::find(Auth::user()->id);
$dat=App\Models\userevaluation::where('user_id' ,Auth::user()->id)->first();
$self=App\Models\selfEvalution::where('user_id' ,Auth::user()->id)->first();
$other=App\Models\otherEvalution::where('to_user_id' ,Auth::user()->id)->first();
//dd($self);
@endphp
  @if(!empty($dat))
  <div id="donutchart" style="width: 820px; height: 500px;"></div>



  
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['evaluate',     {{$dat->result}}],
          ['remaining',      {{100-$dat->result}}]
          
        ]);

        var options = {
          title: 'Total Evaluation',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
</div>




 <div class="col-md-6 col">

  <div id="donutchart1" style="width: 900px; height: 500px;">

  </div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['self',     {{$self->percentage}}],
          ['remaining',      {{100-$self->percentage}}]
          
        ]);

        var options = {
          title: 'Self Evaluation',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart1'));
        chart.draw(data, options);
      }
    </script>
</div>


<div class="col-md-6 col">

  <div id="donutchart2" style="width: 900px; height: 500px;">

  </div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['other',     {{$other->rateing}}],
          ['remaining',      {{100-$other->rateing}}]
          
        ]);

        var options = {
          title: 'Others Evaluation',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart2'));
        chart.draw(data, options);
      }
    </script>
</div> 


<div class="container  p-5 rounded">
<h2 class="text-danger alert alert-info text-center">status:</h2>
<h3 class="text-center bg-info rounded p-4">{{$dat->decesion}}</h3>
</div>
@endif
</div>  
</div> 



</div>
    </div>
@include('../mfooter')
@endsection