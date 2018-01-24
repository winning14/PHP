<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>
			Make Me Elvis - Remove Email
		</title>
		<link rel="stylesheet" type="text/css" href="type.css">
	</head>
	<body>
		<h1>Make Me Elvis - Remove Email</h1>
		<?php
			$email_address=$_POST['email'];
			$dbc=mysqli_connect('10.0.108.38','root','123','elvis_store')
			or die('Error connecting database');
			$query="delete from email_list where email='$email_address'";
			$result=mysqli_query($dbc,$query)
			or die('Error querrying database');
			echo 'Customer removed:'.$email_address;
			mysqli_close($dbc);
			?>			
		<hr>
		<a href="navigator.html">Back to Manager Page</a>
	</body>
</html>