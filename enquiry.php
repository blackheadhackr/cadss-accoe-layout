<?php 

$host = 'localhost';
$user = '';
$pass = '';
$db = '';

$conn = mysqli_connect($host, $user, $pass, $db);

if (mysqli_connect_errno()) {
  echo "Failed to connect to Database: " . mysqli_connect_error();
  exit();
}


$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Insert data into table

$form = "INSERT INTO enquiry (name, email, phone, subject, message) VALUES ('$name','$email', '$phone','$subject', '$message')";
$result = mysqli_query($conn, $form);

$mail_to = 'your mail id';
$subject = 'Enquiry Form Submitted';
	
$body_message = 'Name: '.$name."\n";
$body_message = 'Email: '.$email."\n";
$body_message .= 'Phone: '.$phone."\n";
$body_message = 'Subject: '.$suject."\n";
$body_message .= 'Message: '.$message."\n";
	
$headers = 'From: '.$email."\r\n";
$headers .= 'Reply-To: '.$email."\r\n";
	
$mail_status = mail($mail_to, $subject, $body_message, $headers);
	
if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Thank you for submitting your details.');
		window.location = 'thank-you.php';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Something Went Wrong. Please Resubmit.');
	</script>
<?php
}

?>