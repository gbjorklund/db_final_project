<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Login</title>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<link href="" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/home.css">
		<link rel="stylesheet" href="css/login.css">
	</head>
	<body>
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">N C T U &nbsp;&nbsp; S p o r t s</a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-link">
						<li><a href="home.php">Home <span class="sr-only">(current)</span></a></li>
					</ul>
					<ul class="nav navbar-nav navbar-link">
						<li><a href="events.php">Events <span class="sr-only">(current)</span></a></li>
					</ul>
					<ul class="nav navbar-nav navbar-link">
						<li class="active"><a href="login.php">Login <span class="sr-only">(current)</span></a></li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="container login-wrapper">
			<form action="auth/login.php" method="POST">
				<div class="row">
					<div class="col-md-9 col-md-offset-1">
						<br><br><br>
					</div>
					<div class="col-md-5 col-md-offset-1">
						<label>Student ID</label>
						<input type="text" name="account" class="form-control">
					</div>
					<div class="col-md-12">
						<br>
					</div>
					<div class="col-md-5 col-md-offset-1">
						<label>Password</label>
						<input type="password" name="password" class="form-control">
					</div>
					<div class="col-md-6">
						<button class="btn btn-default btn-login" type="submit">Login</button>
					</div>
					<div class="col-md-10 col-md-offset-1">
						<br>
						<a href="http://localhost/forgetpassword.php" class="text-notify">Forgot your password?</a>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>
