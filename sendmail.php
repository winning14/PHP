<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>
			Send Mail - Make Me Elvis
		</title>
		<link rel="stylesheet" type="text/css" href="type.css">
	</head>
	<body>
				<h1>Make Me Elvis - Send Mail</h1>
	<?php
		error_reporting(E_ALL ^ E_NOTICE);
		$from='winning14@163.com';
		$subject=$_POST['subject'];
		$message=$_POST['message'];
		$output_form=false;
		if((!empty($subject)) && (!empty($message)) ){
			$dbc=mysqli_connect('10.0.108.38','root','123','elvis_store') or die('Error connecting server');
			$query="select * from email_list";
			$result=mysqli_query($dbc,$query) or die('Error querying database');
			while($row=mysqli_fetch_array($result)){
				$to=$row['email'];
				mail($to,$subject,$message,$from);
				echo 'Email sent to:'.$row['first_name'].$row['last_name'].':'.$row['email'].'<br>';
			}
		mysqli_close($dbc);
		}
		else{
			echo 'You forgot the email subject and/or body text.<br>';
			echo '<a href="sendmail.php">Back to Send Mail Page><br>';
			$output_form=true;
		}
		if($output_form){
	?>	
		<h1>Make Me Elvis - Send Mail to All Members</h1>
		<p>Private: For Elmer's use ONLY</p>
		<p>Write and send an email to mailing list members.</p>
		<form method="post" action="http://10.0.108.69/php/project/sendmail.php">
			<label for="subject">Subject of email :</label>
			<input type="text" id="subject" name="subject"><br><br>
			<label for="message">Body of email :</label>
			<input type="textarea" id="message" name="message"><br>
			<input type="submit" name="submit" value="Send">
		</form>	
	<?php
		}
	?>
			<hr>
		<a href="navigator.html">Back to Manager Page</a>
	</body>
</html>