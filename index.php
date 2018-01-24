<!doctype html>
<html>
	<head></head>
	<body>
		<?php
			echo 'Hello World <br>';
			$dbc=mysqli_connect('10.0.108.67','root','bl12345','elvis_store') or die('Error co1nnecting');
			$query="insert into email_list(first_name,last_name,email) values ('$first_name','$last_name','$email')";
			$result=mysqli_query($dbc,$query) or die('Error querying');
			mysqli_close($dbc);
			phpinfo();
		?>
	</body>
</html>
