<?php
	if(isset($_POST['signup'])){

		session_start();

		include_once "dbc.inc.php";
		
		$firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
		$surname = mysqli_real_escape_string($conn, $_POST['surname']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
		$gender = mysqli_real_escape_string($conn, $_POST['gender']);
		$day = mysqli_real_escape_string($conn, $_POST['day']);
		$month = mysqli_real_escape_string($conn, $_POST['month']);
		$year = mysqli_real_escape_string($conn, $_POST['year']);
		$dob= "$year-$month-$day";
		
		// check for empty fields
		if(empty($firstname) || empty($surname) || empty($email) || empty($pwd) || empty($day) ||empty($month) || empty($year) || empty($gender)){
				header("location: ../index.php?empty");
			exit();
		}else{
			// check for invalid entries
			if (!preg_match('/^[A-Za-z]*$/', $firstname) && !preg_match('/^[A-Za-z]*$/', $firstname)){
				header("location: ../index.php?invalid");
				exit();
			}else{
				// check invalid email
				if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
					header("location: ../index.php?email_invalid");
					exit();
				}else{
					// the sql operation
					$sql = "SELECT * from users WHERE email = ?;";
					// initialize prepared stmts
					$stmt = mysqli_stmt_init($conn);
					// prepare the prepared stmt
					if(!mysqli_stmt_prepare($stmt, $sql)){
						echo "SQL1 statement failed!";
					}else{
						// bind parameters
						mysqli_stmt_bind_param($stmt, 's', $email);
						// run parameter inside database
						mysqli_stmt_execute($stmt);
						$result = mysqli_stmt_get_result($stmt);
						$resultCheck = mysqli_num_rows($result);
						if($resultCheck > 0){
							echo "This email is already registered. <br> <a href='#'>Forgotten account</a> <br> <a href='../index.php?invalid-email'>Go back</a>";
						}else{
							// hash password
							$pwdHash = password_hash($pwd, PASSWORD_DEFAULT);
							$sql2 = "INSERT INTO users(firstname, surname, email, pwd, dob, gender) values(?,?,?,?,?,?)";
							if(!mysqli_stmt_prepare($stmt, $sql2)){
								echo "SQL2 statement failed!";
							}else{
								// bind parameters
								mysqli_stmt_bind_param($stmt, 'ssssss', $firstname,$surname,$email,$pwdHash,$dob,$gender);
								// run parameter inside database
								mysqli_stmt_execute($stmt);

								// BEGIN
								$sql3="SELECT * from users WHERE email = ?";
								// prepare stmt
								if(!mysqli_stmt_prepare($stmt, $sql3)){
									echo "SQL statement failed!";
								}else{
									// bind pg_parameter_status()
									mysqli_stmt_bind_param($stmt, 's', $email);
									mysqli_stmt_execute($stmt);
									$result2 = mysqli_stmt_get_result($stmt);
									$resultCheck2 = mysqli_num_rows($result2);

									if($resultCheck2 < 1){
										header("location: ../index.php?Einvalid");
										exit();
									}else{
										if($row = mysqli_fetch_assoc($result2)){
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

												header("location: ../homepage.php?signup=success");
												exit();
											}
										}
									}
								}
								// END
							}
						}
					}
				}
			}
		}
	}else{
		header("location: ../index.php?error");
		exit();
	}