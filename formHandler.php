<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Thank You for Your Application!</title>
			
		<style>
		
		body{
			background-color:cornsilk;
		}
		
		h1{
			text-align:center;
		}
	
		p{
			text-align:center;	
		}
	</style>
		
	</head>

<body>
<?php
	
		//form variables
		$date = date('m/d/Y');
		$firstname = $_POST['firstName'];
		$lastname = $_POST['lastName'];
		$emailaddress = $_POST['emailAddress'];
		$message = $_POST['message'];
		$option = $_POST['option'];
	
		//subject
		$subject = 'Application Submitted for opening of: '.$_POST['option'];
		$usersubject = 'Thank you for your application '.$_POST['firstName'];
	
		//my email
		$to = "contactme@about.hjguerra.com";

		//message to me
		$header = 'MIME-Version: 1.0';
		$header = 'Content-type: text/html; charset=iso-8859-1';
	
		$message = '
			<html>
			
			<body>
			  <p>An Application for '.$option.' was submitted by '.$firstname.', '.$lastname.' on '.$date.'</p>
			  <p>'.$firstname.' has submitted the following message along with his application, '.$message.'</p>
			  <p>They have listed the following email as their point of contact: '.$emailaddress.'</p>
			  <p>At your earlist convience please review their application.</p>
			</body>
			</html>
			';


		//message to user
		$userheader = 'MIME-Version: 1.0';
		$userheader = 'Content-type: text/html; charset=iso-8859-1';
	
		$usermessage = '
			<html>
			
			<body>
			  <p>Thank you '.$firstname.' we have recieved your application for '.$option.' on '.$date.'</p>
			  <p>You have submitted the following qualifications for the following position, '.$message.'</p>
			  <p>We will review your application and will contact via the following email you have listed,'.$emailaddress.' Thank you</p>
			</body>
			</html>
			';
	
	
		if(mail($to, $subject, $message, $header)){
		mail($emailaddress, $usersubject, $usermessage, $userheader);
		
			
?>

	<h1>Your Information has been sent</h1>
	<p>We will reach out to you once we have reviewed your application. Thank you.</p>

<?php } else{ ?>

	<h1>Something Went Wrong</h1>
	<p><?php echo $firstname;?>, it looks like something went wrong. Please double check the information entered and 
		try again. If the issue persists, please contact us at (###)-###-####. Thank you.
	</p>




<?php }?>
	
</body>
	
</html>