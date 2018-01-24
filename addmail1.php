<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>
			Make Me Elvis - Add Mail
		</title>
		<link rel="stylesheet" type="text/css" href="type.css">		
	</head>

	<body>
		<h1>
			Make Me Elvis - Add Mail
		</h1>
		<?php		
			$first_name=$_POST['firstname'];	
			$last_name = $_POST['lastname'];
			$email = $_POST['email'];	
			$output_form=false;
			if((!empty($first_name))&&(!empty($last_name))&&(!empty($email))){
				$dbc=mysqli_connect( '10.0.108.38','root','123','elvis_store')
			 	or die('Error connecting to database');	
				$query="INSERT INTO email_list (first_name,last_name,email) 
				VALUES ('$first_name','$last_name','$email') ";
				$result=mysqli_query($dbc,$query) 
				or die('Error querrying database');	
				echo 'New customer information has been added to mailing list.<br>';
				echo 'Name:'.$first_name.' '.$last_name.'<br>';
				echo 'Email Adress:'.$email.'<br>';
				mysqli_close($dbc);	
			}
			else{
				if((empty($first_name))&&(!empty($last_name))&&(!empty($email))){
					echo 'You did not enter first name.<br>';
					$output_form=true;
				}
				if((empty($first_name))&&(empty($last_name))&&(!empty($email))){
					echo 'You did not enter first name and last name.<br>';
					$output_form=true;
				}
				if((empty($first_name))&&(empty($last_name))&&(empty($email))){
					echo 'You did not enter any information.<br>';
					$output_form=true;
				}
				if((!empty($first_name))&&(empty($last_name))&&(!empty($email))){
					echo 'You did not enter last name.<br>';
					$output_form=true;
				}
				if((!empty($first_name))&&(empty($last_name))&&(empty($email))){
					echo 'You did not enter last name and email address.<br>';
					$output_form=true;
				}
				if((!empty($first_name))&&(!empty($last_name))&&(empty($email))){
					echo 'You did not enter email address.<br>';
					$output_form=true;
				}
				if((empty($first_name))&&(!empty($last_name))&&(empty($email))){
					echo 'You did not enter first name and email address.<br>';
					$output_form=true;
				}				
			}
			
		if($output_form){
		?>
			<hr>
			<form method="post" action="http://10.0.108.69/php/project/addmail.php">
			<label for="firstname">Enter your first name : </label>
			<input type="text" id="firstname" name="firstname"><br>
			<label for="lastname">Enter your last name : </label>
			<input type="text" id="lastname" name="lastname><br>
			<label for="email">Enter your email address : </label>
			<input type="email" id="email" name="email"><br>
			<input type="submit" name="Submit" Value="Submit">
			<hr>
			</form>
		<?php
			}
		?>
		
		<br>
		<a href="emaillist.php">Show Email List</a>
		<hr>
		<a href="navigator.html">Back to Manager Page</a>
		</body>
</html>