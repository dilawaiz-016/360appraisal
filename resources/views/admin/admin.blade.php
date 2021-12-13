@extends('../admin/layout')

@section('title' ,'admin')

@section('script')

@endsection

@section('content')



	<div class="col-div-3">
		@php
			$usr=\App\Models\User::all()->count();
			
			$self=\App\Models\selfEvalution::all()->count();
			$other=\App\Models\OtherEvalution::all()->count();
			$usereval=\App\Models\userevaluation::all()->count();
            // dd($usr);
		@endphp
		<div class="box">
			<p>{{$usr}}<br/><span>Users</span></p>
			<i class="fa fa-users box-icon"></i>
		</div>
	</div>
	<div class="col-div-3">
		<div class="box">
			<p>{{$self}}<br/><span>Self Evaluation</span></p>
			<i class="fa fa-list box-icon"></i>
		</div>
	</div>
	<div class="col-div-3">
		<div class="box">
			<p>{{$other}}<br/><span>Others Evalutions</span></p>
			<i class="fa fa-shopping-bag box-icon"></i>
		</div>
	</div>
	<div class="col-div-3">
		<div class="box">
			<p>{{$usereval}}<br/><span>Evaluated Users</span></p>
			<i class="fa fa-tasks box-icon"></i>
		</div>
	</div>
	<div class="clearfix"></div>
	<br/><br/>
	<div class="row">
	<div class="col-md-7">
		<div style="height:300px; width:600px;margin:auto;">
			<canvas id="barChart"></canvas>
		</div>
	
	</div>
	<div class="col-md-4">
		<h2 class="p-2">Total Average of Evaluation</h2>
		<div style="height:300px; width:600px;margin:auto;">
			<div id="chart_div"></div>
		</div>
	</div>
	</div>






@endsection


@section('jss')

<script>
	// var ctx = document.getElementById('myChart').getContext('2d');
	$(function(){
		google.charts.load('current', {'packages':['gauge']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Label', 'Value'],
        
          ['gain', {{$tot}}],
	
         
        ]);

        var options = {
          width: 400, height: 120,
          redFrom: 90, redTo: 100,
          yellowFrom:75, yellowTo: 90,
          minorTicks: 5
        };

        var chart = new google.visualization.Gauge(document.getElementById('chart_div'));

        chart.draw(data, options);

        setInterval(function() {
         
          chart.draw(data, options);
        }, 13000);
        
      }


	



	var datas=<?php echo json_encode($datas); ?>;

	var ctx =$("#barChart");
	var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['jan' ,'feb','mar','aprail','may','jun','jul','aug' ,'sep','oct','nov','dec'],
        datasets: [{
            label: 'Num of Users',
            data: datas,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
	});

	</script>
	 
@endsection