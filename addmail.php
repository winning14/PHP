<html>
	<meta charset="utf-8">
	<head>
		<title>Make Me Elvis - Add Mail</title>
	</head>
	<body>
		<?php
 	    $dbc = mysqli_connect( '10.0.108.15','root','123','elvis_store') or die ('Error');		
			$first_name = $_POST['firstname'];	
			$last_name = $_POST['lastname'];
			$email_address = $_POST['email'];	

			$query = "insert into email_list (first_name,last_name,email) values ('$first_name','$last_name','$email_address') ";
			mysqli_query($dbc,$query) or die('Error querry');
			
			echo 'New customer information has been added to customer mailing list.';
			mysqli_close($dbc);	
		?>
				<hr>
		<a href="http://10.0.108.15/project/addmail.html">Return to Add Mail page</a><br>
		<a href="http://10.0.108.15/project/navigator.html">Return to mainpage</a>
	</body>
</html>
