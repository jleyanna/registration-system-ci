<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Hello World - Registration - Admin</title>
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.2/css/jquery.dataTables.css">
	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

	<script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#example').dataTable( {
				"order": [[ 9, "desc" ]]
			} );
		} );
	</script>
</head>
<body>

<div id="container" class="container-fluid">
	<div id="body" class="row">
		<h1>Registration Admin</h1>
		<p>Welcome to the administrative section of our registration.</p>		
		
		<table id="example" class="display" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>ID</th>
							<th>First Name</th>
							<th>Last Name</th>
							<th>Address</th>
							<th>Address 2</th>
							<th>City</th>
							<th>State</th>
							<th>Zip Code</th>
							<th>Country</th>
							<th>Date</th>
							<th>Actions</th>
						</tr>
					</thead>

					<tfoot>
						<tr>
							<th>ID</th>
							<th>First Name</th>
							<th>Last Name</th>
							<th>Address</th>
							<th>Address 2</th>
							<th>City</th>
							<th>State</th>
							<th>Zip Code</th>
							<th>Country</th>
							<th>Date</th>
							<th>Actions</th>
						</tr>
					</tfoot>

					<tbody>
						<? foreach ($registrations as $r): ?>
							<tr>
								<td><?= $r->id; ?></td>
								<td><?= $r->first_name; ?></td>
								<td><?= $r->last_name; ?></td>
								<td><?= $r->address_1; ?></td>
								<td><?= $r->address_2; ?></td>
								<td><?= $r->city; ?></td>
								<td><?= $r->state; ?></td>
								<td><?= $r->zip; ?></td>
								<td><?= $r->country; ?></td>
								<td><?= $r->date_time; ?></td>
								<td>
									<button type="button" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-pencil"></span> Edit</button> <button type="button" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</button>
								</td>
							</tr>
						<? endforeach; ?>
					</tbody>
				</table>
						
	</div>

	<p class="footer">Designed and Developed by <a href="http://www.jasonleyanna.com" target="_blank">Jason Leyanna</a>. Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>