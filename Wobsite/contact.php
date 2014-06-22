<?php
	$to = "palmerridgerobotics@gmail.com";
	$subject = "Filled Out PRHS Robotics Website Contact Form " . $_POST["subject"];
	$message = $_POST["message"];
	$from = $_POST["from"];
	$headers = "From:" . $from;
	mail($to,$subject,$message,$headers);
	header('Location: www.prrobotics.com');
?>