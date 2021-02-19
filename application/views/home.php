<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container box">
  <table class="table">
  	<tr>
  		<td>Id</td>
  		<td>name</td>
  		<td>Email</td>
  		<td>Action</td>
  	</tr>
  	<?php
  	$i=1;
  	foreach($customer_data as $row){
  	?>
  	<tr>
  		<td><?php echo $i; ?></td>
  		<td><?php echo $row->name; ?></td>
  		<td><?php echo $row->email; ?></td>
  		<td><a href="<?php echo base_url().'Home/pdfdetails/'.$row->id ?>">View</a></td>
  	</tr>
  	<?php $i++; } ?>
  </table>
  
 </div>
</body>
</html>