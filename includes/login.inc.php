<?php
	if(!isset($_POST['login'])){
		header("location: ../index.php?error");
		exit();
	}else{

		session_start();

		include_once "dbc.inc.php";
		
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

		// check for empty fields
		if(empty($email) || empty($pwd)){
			header("location: ../index.php?empty");
			exit();
		}else{
			$sql="SELECT * from users WHERE email = ?";
			// initialize prepared stmts
			$stmt = mysqli_stmt_init($conn);
			// prepare stmt
			if(!mysqli_stmt_prepare($stmt, $sql)){
				echo "SQL statement failed!";
			}else{
				// bind pg_parameter_status()
				mysqli_stmt_bind_param($stmt, 's', $email);
				mysqli_stmt_execute($stmt);
				$result = mysqli_stmt_get_result($stmt);
				$resultCheck = mysqli_num_rows($result);

				if($resultCheck < 1){
					header("location: ../index.php?Einvalid");
					exit();
				}else{
					if($row = mysqli_fetch_assoc($result)){
						$passwordCheck = password_verify($pwd, $row['pwd']);
						if(!$passwordCheck){
							header("location: ../index.php?Pinvalid");
							exit();
						}else{
							$_SESSION['uid'] = $row['uid'];
							$_SESSION['firstname'] = $row['firstname'];
							$_SESSION['surname'] = $row['surname'];
							$_SESSION['email'] = $row['email'];
							$_SESSION['dob'] = $row['dob'];
							$_SESSION['gender'] = $row['gender'];

							header("location: ../homepage.php?login=success");
							exit();
						}
					}
				}
			}
		}
	}
	// sb@123