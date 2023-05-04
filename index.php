<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
 		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	</head>
<body>
	<nav class="navbar navbar-default">
		<div class="comtainer-fluid">
			<a class="navbar-brand" href="https://sourcecodester.com">Sourcecodester</a>
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">PHP - Multiple Form Inputs</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-4">
			<form method="POST" action="save.php">
				<div class="form-group">
					<label>Parent Name</label>
					<input type="text" name="parent" placeholder="Enter here..." class="form-control" required="required"/>
				</div>
				<br />
				<label>Children's Name</label> <button type="button" class="btn btn-success btn-sm" onclick="addEntry();"><span class="glyphicon glyphicon-plus"></span></button>
				<br /><br />
				<div id="children">
					<div class="form-group">
						<input type="text" name="children[]" placeholder="Enter here..." class="form-control" required="required"/>
					</div>
				</div>
				<center><button class="btn btn-primary" name="save"><span class="glyphicon glyphicon-save"></span> Submit</button></center>
			</form>
		</div>
		<div class="col-md-8">
			<div class="table-responsive">
				<table class="table table-bordered">
					<thead class='alert-info'>
						<tr>
							<th>Parent Name</th>
							<th>Children's Name</th>
						</tr>
					</thead>
					<tbody>
						<?php
							require'conn.php';
 
							$query=mysqli_query($conn, 'SELECT * FROM `member`') or die(mysqli_error());
							while($fetch=mysqli_fetch_array($query)){
						?>
						<tr>
							<td><?php echo $fetch['parent']?></td>
							<td><?php echo $fetch['children']?></td>
						</tr>
						<?php
							}
						?>
					</tbody>
				</table>
			</div>	
		</div>
	</div>
<script src="js/script.js"></script>
</body>	
</html>