<?php
//header.php

//Puts in sign up and log in forms if not logged in.
if(isset($_SESSION['signed_in']) && $_SESSION['signed_in'] == true)
{
	echo "Hello and welcome to the PR Robotics website.";
} else {
	include('signup_form.php');
	include('login_form.php');
}
?>