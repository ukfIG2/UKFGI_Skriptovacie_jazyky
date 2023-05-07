<!--Header neham tu, lebo inde ani nebude-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Log In &amp; Sign Up Form - Responsive</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="author" content="html.design">
<!-- description -->
<meta name="description" content="Log In &amp; Sign Up Form - Responsive Template">
<link rel="shortcut icon" href="images/favicon.ico">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/login/bootstrap.min.css">
<!-- Fontawesome CSS -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css">
<!-- Reset CSS -->
<link rel="stylesheet" href="css/login/reset.css">
<!-- Style CSS -->
<link rel="stylesheet" href="css/login/style.css">
<!-- Responsive  CSS -->
<link rel="stylesheet" href="css/login/responsive.css">
</head>
<body>

<div class="popup-bg"></div>

<div class="header-title">
	<div class="container">
		<h1 class="text-white">Login / Signup Modal Popup</h1>
	</div>
</div>

<div class="popup-login-signup">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<button type="button" class="btn-tip" data-toggle="modal" data-target="#exampleModalCenter">
					Login / Signup
				</button>
			</div>
			<!-- Modal -->
			<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
						<nav class="tab-bar-top">
							<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
								<a class="nav-item nav-link active" id="nav-login-tab" data-toggle="tab" href="#nav-login" role="tab" aria-controls="nav-login" aria-selected="true">Login</a>
								<a class="nav-item nav-link" id="nav-signup-tab" data-toggle="tab" href="#nav-signup" role="tab" aria-controls="nav-signup" aria-selected="false">Signup</a>
							</div>
						</nav>
						<div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
							<div class="tab-pane fade show active" id="nav-login" role="tabpanel" aria-labelledby="nav-login-tab">
								<!--Login START-->
								<form class="form-login-signup">
									<div class="form-label-group">
										<input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
										<label for="inputEmail">Email address</label>
									</div>

									<div class="form-label-group">
										<input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
										<label for="inputPassword">Password</label>
									</div>
									<div class="custom-control custom-checkbox mb-3">
										<input type="checkbox" class="custom-control-input" id="customCheck1">
										<label class="custom-control-label" for="customCheck1">Remember password</label>
									</div>
									<button class="btn btn-lg btn-primary btn-color-hover btn-block text-uppercase" type="submit">Login</button>
									<hr class="my-4">
									<button class="btn btn-lg btn-google btn-block soi-hv text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Sign in with Google</button>
									<button class="btn btn-lg btn-facebook btn-block soi-hv  text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign in with Facebook</button>
								</form>
								<!--Login END-->
							</div>
							<div class="tab-pane fade" id="nav-signup" role="tabpanel" aria-labelledby="nav-signup-tab">
								<!--Register START-->
								<form class="form-login-signup" action="include/register/insert.php" method="post">

									<div class="form-label-group">
										<input type="text" id="inputUserame" class="form-control" name="user_name" placeholder="Username" required autofocus>
										<label for="inputUserame">Username</label>
									</div>

									<div class="form-label-group">
										<input type="email" id="inputEmail-1" class="form-control" name="user_email" placeholder="Email address" required>
										<label for="inputEmail-1">Email address</label>
									</div>
								  
									<hr>

									<div class="form-label-group">
										<input type="password" id="inputPassword-1" class="form-control" name="user_password" placeholder="Password" required>
										<label for="inputPassword-1">Password</label>
									</div>
								  
									<div class="form-label-group">
										<input type="password" id="inputConfirmPassword" class="form-control" placeholder="Password" required>
										<label for="inputConfirmPassword">Confirm password</label>
									</div>
									
									<div class="custom-control custom-checkbox mb-3">
										<input type="checkbox" class="custom-control-input" id="customCheck2" required>
										<label class="custom-control-label" for="customCheck2">I Agree To The Terms & Conditions</label>
									</div>

									<button class="btn btn-lg btn-primary btn-block btn-color-hover text-uppercase" type="submit" value="Zaregistrovať" name="add_user">Register</button>									
									
								</form>
								<!--Register END-->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- jquery latest version -->
<script src="js/jquery.min.js"></script>
<!-- popper.min.js -->
<script src="js/popper.min.js"></script>    
<!-- bootstrap js -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>