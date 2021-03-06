<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css"> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script><!--Jquery-->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script><!--bootstrap-->
</head>
<body>
	<center>
		<h1 style="background-color: blue; color: white;">Welcome to Admin Panel</h1>
	</center>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-2">

				<div class="panel-group">
  					<div class="panel panel-default">
					    <div class="panel-heading">
					      <h4 class="panel-title">
					        <a href="#">Dashboard</a>
					      </h4>
					    </div>
  					</div>
				</div>

                <div class="panel-group">
  					<div class="panel panel-default">
					    <div class="panel-heading">
					      <h4 class="panel-title">
					        <a data-toggle="collapse" href="#collapse1">Branch</a>
					      </h4>
					    </div>
					    <div id="collapse1" class="panel-collapse collapse">
					      <ul class="list-group">
					        <li class="list-group-item">
					        	<a href="#">Add New Branch</a>
					        </li>
					        <li class="list-group-item">
					        	<a href="#">Branch List</a>
					        </li>
					      </ul>
					    </div>
  					</div>
				</div>

				<div class="panel-group">
  					<div class="panel panel-default">
					    <div class="panel-heading">
					      <h4 class="panel-title">
					        <a data-toggle="collapse" href="#collapse2">Student Details</a>
					      </h4>
					    </div>
					    <div id="collapse2" class="panel-collapse collapse">
					      <ul class="list-group">
					        <li class="list-group-item">New Student</li>
					        <li class="list-group-item">Student List</li>
					        <li class="list-group-item">Edit and Update</li>
					        <li class="list-group-item">Online Registration</li>
					        <li class="list-group-item">View Certificate</li>
					      </ul>
					    </div>
  					</div>
				</div>

				<div class="panel-group">
  					<div class="panel panel-default">
					    <div class="panel-heading">
					      <h4 class="panel-title">
					        <a data-toggle="collapse" href="#collapse3">Fee Module</a>
					      </h4>
					    </div>
					    <div id="collapse3" class="panel-collapse collapse">
					      <ul class="list-group">
					        <li class="list-group-item">Take Fee</li>
					        <li class="list-group-item">Fee Report</li>
					      </ul>
					    </div>
  					</div>
				</div>

				<div class="panel-group">
  					<div class="panel panel-default">
					    <div class="panel-heading">
					      <h4 class="panel-title">
					        <a data-toggle="collapse" href="#collapse4">Accountant</a>
					      </h4>
					    </div>
					    <div id="collapse4" class="panel-collapse collapse">
					      <ul class="list-group">
					        <li class="list-group-item">Credit</li>
					        <li class="list-group-item">Debit</li>
					        <li class="list-group-item">Cash</li>
					        <li class="list-group-item">Expens</li>
					        <li class="list-group-item">Day Report</li>
					      </ul>
					    </div>
  					</div>
				</div>




				<div class="panel-group">
  					<div class="panel panel-default">
					    <div class="panel-heading">
					      <h4 class="panel-title">
					        <a data-toggle="collapse" href="#collapse6">Setting</a>
					      </h4>
					    </div>
					    <div id="collapse6" class="panel-collapse collapse">
					      <ul class="list-group">
					        <li class="list-group-item">Courses</li>
					        <li class="list-group-item">Batch Timing</li>
					        <li class="list-group-item">Special Batch</li>
					        <li class="list-group-item">New Batch</li>
					        <li class="list-group-item">New Batch</li>
					        <li class="list-group-item">Expense List</li>
					      </ul>
					    </div>
  					</div>
				</div>


			</div>



			<div class="col-sm-10">
				<h3>Column 2</h3>	
				<p>Lorem ipsum dolor..</p>
				<p>Ut enim ad..</p>
			</div>
		</div>
	</div>

</body>
</html>