<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="signupstyle.css">
	<!-- set meta -->
	<meta charset="utf-8">
	<meta name="Thear Sophal & Meng Taingon" content="Lab 3">
	<meta name="NIPTICT" content="Computer Science">
	<meta name="Subject" content="Web Application">

	<style type="text/css">
		a:visited {
  			color: #FFC312;
		}
	</style>

</head>
<body >
	<div class="container">
		<div class="d-flex justify-content-center h-100">
			<div class="card cardtest">
				<div class="card-header">
					<h3>Sign In</h3>
					<div class="d-flex justify-content-end social_icon">
						<span>
							<img src="niptict.png" style="width: 120px; height: 120px;">
						</span>
					</div>
				</div>
				<div class="card-body">

					<!-- start form -->
					<form action="signupbackend.php" method="POST">

						<!-- name -->
						<div class="input-group form-group">

							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>

							<input type="text" class="form-control" placeholder="Name" name="name" required>
							
						</div>

						<!-- sex -->
						<div class="input-group form-group">

							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-venus-mars"></i></span>
							</div>
							<select class="form-control" name="sex" required>
								<option>Gender</option>
								<option>Male</option>
								<option>Female</option>
							</select>

							<!-- <input type="select" class="form-control" placeholder="Sex" name="sex"> -->
						</div>


						<!-- email -->
						<div class="input-group form-group">

							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-envelope-open-text"></i></span>
							</div>

							<input type="email" class="form-control" placeholder="Email" name="email" required>
						</div>

						<!-- password -->
						<div class="input-group form-group">

							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>

							<input type="password" class="form-control" placeholder="Password" name="password" required>
						</div>

						<!-- confirm password -->
						<div class="input-group form-group">

							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>

							<input type="password" class="form-control" placeholder="Confirm-Password" name="password" required>
						</div>
					

						<!-- Sign up button -->
						<div style="justify-content: center;align-items: center;display: flex;flex-direction: row;">
							<div class="form-group">
								<!-- <input type="submit" value="Log In" class="btn float-right login_btn"> -->
								<a href="login.php">Log In</a>

							</div>

							<div class="form-group" style="margin-left: 120px;">
								<input type="submit" value="Sign Up" class="btn float-right login_btn">

							</div>
							
						</div>
						

					</form>
					<!-- end form -->


				</div>
			</div>
		</div>
	</div>


</body>
</html>