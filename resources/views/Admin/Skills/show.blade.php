<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title>Admin Dashboard</title>
		<meta name="description" content="Free Bootstrap 4 Admin Theme | Pike Admin">
		<meta name="author" content="Pike Web Development - https://www.pikephp.com">

		<!-- Favicon -->
		<link rel="shortcut icon" href="/assets/images/favicon.ico">

		<!-- Bootstrap CSS -->
		<link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		
		<!-- Font Awesome CSS -->
		<link href="/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
		
		<!-- Custom CSS -->
		<link href="/assets/css/style.css" rel="stylesheet" type="text/css" />
		
		<!-- BEGIN CSS for this skill -->
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css"/>
		<!-- END CSS for this skill -->
		<style>
@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100);



div.table-title {
  display: inline-block;
  margin: auto;
  max-width: 100px;
  padding:5px;
  width: 100%;
  
}

.table-title h3 {
   color: #fafafa;
   font-size: 30px;
   font-weight: 400;
   font-style:normal;
   font-family: "Roboto", helvetica, arial, sans-serif;
   text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
   text-transform:uppercase;
}


/*** Table Styles **/

.table-fill {

  border-radius:22px;
  border-collapse: collapse;
  height: 320px;
  margin: 300px 50px 75px 300px;
  max-width: 1000px;
  width: 100%;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
  animation: float 5s infinite;
}
 
th {
  color:#D5DDE5;;
  background:#1b1e24;
  border-bottom:4px solid #9ea7af;
  border-right: 1px solid #343a45;
  font-size:23px;
  font-weight: 100;
  padding:24px;
  text-align:left;
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  vertical-align:middle;
}

th:first-child {
  border-top-left-radius:3px;
}
 
th:last-child {
  border-top-right-radius:3px;
  border-right:none;
}
  
tr {
  border-top: 1px solid #C1C3D1;
  border-bottom-: 10px solid #C1C3D1;
  color:#666B85;
  font-size:16px;
  font-weight:normal;
  text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);
}
 
tr:hover td {
  background:#4E5066;
  color:#FFFFFF;
  border-top: 1px solid #22262e;
}
 
tr:first-child {
  border-top:none;
}

tr:last-child {
  border-bottom:none;
}
 
tr:nth-child(odd) td {
  background:#EBEBEB;
}
 
tr:nth-child(odd):hover td {
  background:#4E5066;
}

tr:last-child td:first-child {
  border-bottom-left-radius:3px;
}
 
tr:last-child td:last-child {
  border-bottom-right-radius:3px;
}
 
td {
  background:#FFFFFF;
  padding:20px;
  text-align:left;
  vertical-align:middle;
  font-weight:500;
  font-size:20px;
  text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
  border-right: 1px solid #C1C3D1;
}

td:last-child {
  border-right: 0px;
}

th.text-left {
  text-align: left;
}

th.text-center {
  text-align: center;
}

th.text-right {
  text-align: right;
}

td.text-left {
  text-align: left;
}

td.text-center {
  text-align: center;
}

td.text-right {
  text-align: right;
}


		</style>
	</head>
	<body>
<script src="/assets/js/modernizr.min.js"></script>
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/moment.min.js"></script>
		
<script src="/assets/js/popper.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>

<script src="/assets/js/detect.js"></script>
<script src="/assets/js/fastclick.js"></script>
<script src="/assets/js/jquery.blockUI.js"></script>
<script src="/assets/js/jquery.nicescroll.js"></script>

		<x-Admin.sidebar />

		<div class="table-title">
				<h1>Skills</h1>
			</div>
			<table class="table-fill">
			<thead>
			<tr>
			<th class="text-left">Name</th>
			<th class="text-left">Progress</th>
			<th class="text-left">Control</th>
			</tr>
			</thead>
			<tbody class="table-hover">
			@foreach ($skills as $skill)
			<tr>
			<td class="text-left">{{ $skill->name }}</td>
			<td class="text-left">{{ $skill->progress }}</td>
			<td style="  display: flex;
			justify-content: center;">
			<span>
			<a href="/admin/skills/edit/{{ $skill->id }}" style="color: blue">Edit </a> Or <a href="/admin/skills/delete/{{ $skill->id }}" style="color: red"> Delete</a>	</span>
		</td>
			</tr>
			@endforeach
		
			</tbody>
			</table>

			<script src="/assets/js/modernizr.min.js"></script>
			<script src="/assets/js/jquery.min.js"></script>
			<script src="/assets/js/moment.min.js"></script>
					
			<script src="/assets/js/popper.min.js"></script>
			<script src="/assets/js/bootstrap.min.js"></script>
			
			<script src="/assets/js/detect.js"></script>
			<script src="/assets/js/fastclick.js"></script>
			<script src="/assets/js/jquery.blockUI.js"></script>
			<script src="/assets/js/jquery.nicescroll.js"></script>
			
			<!-- App js -->
			<script src="/assets/js/pikeadmin.js"></script>
			
			<!-- BEGIN Java Script for this skill -->
				<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
				<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
				<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
			
				<!-- Counter-Up-->
				<script src="/assets/plugins/waypoints/lib/jquery.waypoints.min.js"></script>
				<script src="/assets/plugins/counterup/jquery.counterup.min.js"></script>			
			
				<script>
					$(document).ready(function() {
						// data-tables
						$('#example1').DataTable();
								
						// counter-up
						$('.counter').counterUp({
							delay: 10,
							time: 600
						});
					} );		
				</script>
				
				<script>
				var ctx1 = document.getElementById("lineChart").getContext('2d');
				var lineChart = new Chart(ctx1, {
					type: 'bar',
					data: {
						labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
						datasets: [{
								label: 'Dataset 1',
								backgroundColor: '#3EB9DC',
								data: [10, 14, 6, 7, 13, 9, 13, 16, 11, 8, 12, 9] 
							}, {
								label: 'Dataset 2',
								backgroundColor: '#EBEFF3',
								data: [12, 14, 6, 7, 13, 6, 13, 16, 10, 8, 11, 12]
							}]
							
					},
					options: {
									tooltips: {
										mode: 'index',
										intersect: false
									},
									responsive: true,
									scales: {
										xAxes: [{
											stacked: true,
										}],
										yAxes: [{
											stacked: true
										}]
									}
								}
				});
			
			
				var ctx2 = document.getElementById("pieChart").getContext('2d');
				var pieChart = new Chart(ctx2, {
					type: 'pie',
					data: {
							datasets: [{
								data: [12, 19, 3, 5, 2, 3],
								backgroundColor: [
									'rgba(255,99,132,1)',
									'rgba(54, 162, 235, 1)',
									'rgba(255, 206, 86, 1)',
									'rgba(75, 192, 192, 1)',
									'rgba(153, 102, 255, 1)',
									'rgba(255, 159, 64, 1)'
								],
								label: 'Dataset 1'
							}],
							labels: [
								"Red",
								"Orange",
								"Yellow",
								"Green",
								"Blue"
							]
						},
						options: {
							responsive: true
						}
				 
				});
			
			
				var ctx3 = document.getElementById("doughnutChart").getContext('2d');
				var doughnutChart = new Chart(ctx3, {
					type: 'doughnut',
					data: {
							datasets: [{
								data: [12, 19, 3, 5, 2, 3],
								backgroundColor: [
									'rgba(255,99,132,1)',
									'rgba(54, 162, 235, 1)',
									'rgba(255, 206, 86, 1)',
									'rgba(75, 192, 192, 1)',
									'rgba(153, 102, 255, 1)',
									'rgba(255, 159, 64, 1)'
								],
								label: 'Dataset 1'
							}],
							labels: [
								"Red",
								"Orange",
								"Yellow",
								"Green",
								"Blue"
							]
						},
						options: {
							responsive: true
						}
				 
				});
				</script>
			<!-- END Java Script for this skill -->
	</body>
</html>