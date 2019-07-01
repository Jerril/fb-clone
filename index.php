<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<!-- Custom css -->
		<link rel="stylesheet" href="css/style.css">
		<title>fb-Clone</title>
	</head>
	<body class="body-index">
		<nav class="my-navbar navbar navbar-expand-lg navbar-light px-lg-5">
			<div class="container"><a class="navbar-brand font-weight-bolder" href="index.php">fb-Clone</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<form class="my-2 my-lg-0 ml-auto d-lg-flex align-items-start" method="post" action="includes/login.inc.php">
					<div class="form-group mb-lg-0">
						<label for="exampleInputEmail1" class="text-light mb-0">Email or Phone</label>
						<input type="email" name="email" class="form-control border-dark rounded-0" id="exampleInputEmail1" aria-describedby="emailHelp">
					</div>
					<div class="form-group mx-lg-3 mb-lg-0">
						<label for="exampleInputPassword1" class="text-light mb-0">Password</label>
						<input type="password" name="pwd" class="form-control border-dark rounded-0" id="exampleInputPassword1">
						<a href="#" class="pwd-forgot text-light">Forgotten account?</a>
					</div>
					<button name="login" class="btn btn-primary my-2 mt-lg-4 my-sm-0 border-dark rounded-0 font-weight-bold" type="submit">Log In</button>
				</form>
			</div></div>
		</nav>
		<section class="sec-signup">
			<div class="container">
				<div class="row py-4">
					<div class="col-12 col-md-4"></div>
					<div class="col-12 col-md-5">
						<form method="post" action="includes/signup.inc.php">
							<h1 class="h1-signup">Sign Up</h1>
							<p class="lead"> It's free and always will be.</p>
							<div class="form-row">
								<div class="col-6 my-2">
									<input type="text" name="firstname" class="form-control" placeholder="Firstname">
								</div>
								<div class="col-6 my-2">
									<input type="text" name="surname" class="form-control" placeholder="Surname">
								</div>
								<div class="col-12 my-2">
									<input type="text" name="email" class="form-control" placeholder="Mobile number or email address">
								</div>
								<div class="col-12 my-2">
									<input type="password" name="pwd" class="form-control" placeholder="New password">
								</div>
								<div class="col-12 my-2">
									<h6 class="text-secondary">Birthday</h6>
									<div class="form-row">
										<div class="form-group col-2 px-0">
											<select name="day" id="inputState" class="form-control rounded-0">
												<option>1</option>
												<option>2</option>
												<option>3</option>
											</select>
										</div>
										<div class="form-group col-2 px-0">
											<select name="month" id="inputState" class="form-control rounded-0">
												<option value="1">Jan</option>
												<option value="2">Feb</option>
												<option value="3">Mar</option>
												<option value="4">Apr</option>
												<option value="5">May</option>
												<option value="6">Jun</option>
												<option value="7">Jul</option>
												<option value="8">Aug</option>
												<option value="9">Sept</option>
												<option value="10">Oct</option>
												<option value="11">Nov</option>
												<option value="12">Dec</option>
											</select>
										</div>
										<div class="form-group col-2 px-0">
											<select name="year" id="inputState" class="form-control rounded-0">
												<option>1905</option>
												<option>1906</option>
												<option>1907</option>
											</select>
										</div>
									</div>
								</div>
								<div class="col-12 my-2">
									<h6 class="text-secondary">Gender</h6>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="gender" id="female" value="female">
										<label class="form-check-label" for="female">Female</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="gender" id="male" value="male">
										<label class="form-check-label" for="male">Male</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="gender" id="others" value="others">
										<label class="form-check-label" for="others">Others</label>
									</div>
								</div>
								<p class="terms my-3 small text-secondary">
									By clicking Sign Up, you agree to our Terms, Data Policy and Cookie Policy. You may receive SMS notifications from us and can opt out at any time.
								</p>
								<button type="submit" name="signup" class="btn border border-dark btn-signup px-5 my-3 text-white font-weight-bold">Sign Up</button>
							</div>
						</form>
					</div>
					<div class="col-12 col-md-3"></div>
				</div>
			</div>
		</section>
		<footer class="bg-white">
			<div class="container d-flex align-items-center justify-content-between pt-3">
				<p class="text-secondary align-self-center">fb-Clone &copy; <?php echo date('Y')?></p>
				<p class="text-secondary text-right">Built with ❤️ by moi</p>
			</div>
		</footer>
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>