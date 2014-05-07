<?php
	$to = "companyname@email.com"; /*Your Email*/
	$subject = "Messsage from the landing"; /*Issue*/
	$date = date ("l, F jS, Y"); 
	$time = date ("h:i A"); 
	
		
	
	$firstName   = $_REQUEST['firstname'];
	$lastName    = $_REQUEST['lastname'];
	$Email       = $_REQUEST['email'];
	$age         = $_REQUEST['age'];
	$program     = $_REQUEST['program'];
	$education   = $_REQUEST['education'];
	$comments    = $_REQUEST['comments'];	
	

	$msg="
	<span style='font-size:15px;'>
	<strong>Name:</strong> $firstName $lastName<br/>
	<strong>Email:</strong> $Email<br/>
	<strong>Age:</strong> $age<br/>
	<strong>Education Level:</strong> $education<br/>
	<strong>Program:</strong> $program<br/>
	<strong>Comments:</strong> $comments<br/> 
	
	Message sent from website on date  $date, hour: $time.
	</span>";

	if ($Email=="") {
		echo "<div class='alert alert-error'>
  				<a class='close' data-dismiss='alert'>×</a>
  				<strong>Warning!</strong> Please enter your email.
			</div>
		
		";
	}	
	elseif ($firstName=="" or $lastName=="" or $age=="") {
		echo "<div class='alert alert-error'>
  				<a class='close' data-dismiss='alert'>×</a>
  				<strong>Warning!</strong> Please fill all the fields.
			</div>";
	}	
	else{
		mail($to, $subject, $msg, "From: $Email");
		echo "<div class='alert alert-success'>
  				<a class='close' data-dismiss='alert'>×</a>
  				<strong>Thank you for your message!</strong>
			</div>
		
		
		";	
	}
	
?>
