<!doctype html>
<html>
	<head>
		<title>Show Email List</title>
	</head>
	<body>
		<h1>Make Me Elvis - Email List</h1>
		<?php
			$n=1;
			$dbc=mysqli_connect('10.0.108.15','root','123','elvis_store');
			$query="select * from email_list";
			$result=mysqli_query($dbc,$query);
			while($row=mysqli_fetch_array($result)){
				echo $n.'.&nbsp;&nbsp;&nbsp;'.$row['first_name'].' '
				.$row['last_name'].':&nbsp;&nbsp;&nbsp;'.$row['email'].'<br>';
				$n++;
			}
		?>
		<hr>
		<a href="navigator.html">Back to Manager Page</a>
	</body>
</html>