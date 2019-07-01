<?php
	if(!isset($_POST['logout'])){
		header("location: ../index.php?error");
		exit();
	}else{
		session_start();

		session_unset();
		session_destroy();
		header("location: ../index.php?logout=success");
		exit();
	}

	// sb@123