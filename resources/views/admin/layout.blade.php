<!Doctype HTML>
<html>
<head>
	<title>@yield('title')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="{{asset('css/adminstyle.css')}}" type="text/css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="//cdn.datatables.net/1.11.2/css/jquery.dataTables.min.css">
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  
  @yield('script');
  <style>
   @yield('css');
  </style> 


</head>


<body style="background:#DCDCDC;">

  
	
	<div id="mySidenav" class="sidenav">
	<p class="logo"><span>A</span>-360</p>
  <a href="/admin" class="icon-a"><i class="fa fa-dashboard icons"></i> &nbsp;&nbsp;Dashboard</a>
  <a href="/collect"class="icon-a"><i class="fa fa-users icons"></i> &nbsp;&nbsp;Collect Reports</a>
  <a href="/generate"class="icon-a"><i class="fa fa-list icons"></i> &nbsp;&nbsp;Generate Reports</a>
  <a href="/useractivity"class="icon-a"><i class="fa fa-shopping-bag icons"></i> &nbsp;&nbsp;User Activity</a>
  <a href="/users"class="icon-a"><i class="fa fa-tasks icons"></i> &nbsp;&nbsp;Users</a>
  
  <a href="/showfeed"class="icon-a"><i class="fa fa-list-alt icons"></i> &nbsp;&nbsp;User Feedback</a>
 <a href="/addhr"class="icon-a"><i class="fa fa-user icons"></i> &nbsp;&nbsp;Add HR</a>


</div>

<div id="main" style="height:100vh; background:#DCDCDC;">

	<div class="head">
		<div class="col-div-6">
<span style="font-size:30px;cursor:pointer; color: text-dark;" class="nav"  >&#9776; Dashboard</span>
<span style="font-size:30px;cursor:pointer; color: text-dark;" class="nav2"  >&#9776; Dashboard</span>
</div>
	
	<div class="col-div-6">
	<div class="profile">

		{{-- <img src="images/user.png" class="pro-img" />
		<p class="text-dark">Manoj Adhikari <span class="text-dark">UI / UX DESIGNER</span></p> --}}
    <form action="{{route('logout')}}" method="post">
      @csrf
       <input type="submit" name="logout"  class="btn btn-success" value="logout" style="background:#43A350;"/>
    </form>
	</div>
</div>
	<div class="clearfix"></div>
</div>

	<div class="clearfix"></div>
	<br/>


@yield('content')








<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script>
<script>
  $(document).ready( function () {
    $('#myTable').DataTable();
} );</script>
<script>


  $(".nav").click(function(){
    $("#mySidenav").css('width','70px');
    $("#main").css('margin-left','70px');
    $(".logo").css('visibility', 'hidden');
    $(".logo span").css('visibility', 'visible');
     $(".logo span").css('margin-left', '-10px');
     $(".icon-a").css('visibility', 'hidden');
     $(".icons").css('visibility', 'visible');
     $(".icons").css('margin-left', '-8px');
      $(".nav").css('display','none');
      $(".nav2").css('display','block');
  });

$(".nav2").click(function(){
    $("#mySidenav").css('width','300px');
    $("#main").css('margin-left','300px');
    $(".logo").css('visibility', 'visible');
     $(".icon-a").css('visibility', 'visible');
     $(".icons").css('visibility', 'visible');
     $(".nav").css('display','block');
      $(".nav2").css('display','none');
 });


 $('.delete-confirm').on('click', function (event) {
    event.preventDefault();
    const url = $(this).attr('href');
    swal({
        title: 'Are you sure?',
        text: 'This record and it`s details will be permanantly deleted!',
        icon: 'warning',
        buttons: ["Cancel", "Yes!"],
    }).then(function(value) {
        if (value) {
            window.location.href = url;
        }
    });
});



</script>

@yield('jss')



</body>


</html>
