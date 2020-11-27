<!DOCTYPE html>
<? 

?>
<html lang="en" class="no-js">


<head>
	
	<title>admin page</title>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<link rel="profile" href="#">


    <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Dosis:400,700,500|Nunito:300,400,600' />

	<meta name=viewport content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone-no">

	<!-- CSS files -->
	<link rel="stylesheet" href="../css/plugins.css">
	<link rel="stylesheet" href="../css/stylem.css">

</head>
<body>
<!--preloading-->

	<div class="container">
		<div class="row">
			<div class="col-md-12">
					<h1>admin  profile</h1>
					<ul class="breadcumb">
						<li class="active"><a href="#"></a></li>
						<li> <span class="ion-ios-arrow-right"></span></li>
					</ul>
				</div>
			</div>
		</div>
<div class="page-single">
	<div class="container">
		<div class="row ipad-width">
			<div class="col-md-3 col-sm-12 col-xs-12">
				<div class="user-information">
					<div class="user-img">
						<a href="#"><img src="../images/img.jpg" alt=""><br></a>
						<a href="#" class="redbtn">Change <picture></picture></a>	
					</div>
					<div class="user-fav">
						<p>Account Details</p>
						<ul>
						<li class="active"><a href="upload.php">add movie</a></li>
							<li><a href="managebooking.php">view bookings</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-9 col-sm-12 col-xs-12">
				<div class="form-style-1 user-pro" action="#">
					<form action="" method='post' class="user">
						<h4> add producers</h4>
						<div class="row">
							<div class="col-md-6 form-it">
								<label>Username</label>
								<input name='uname'type="text" placeholder="admin">
							</div>
							<div class="col-md-6 form-it">
								<label>Email Address</label>
								<input type="text" name='email'placeholder="yihalem@360movie.com">
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 form-it">
								<label>First Name</label>
								<input type="text"name='name' placeholder="yihalem ">
							</div>
							<div class="col-md-6 form-it">
								<label>Last Name</label>
								<input type="text"name='lname' placeholder="mandefro">
							</div>
						</div>
						<div class="row">
						<div class="col-md-6 form-it">
								<label>password</label>
								<input type="text"name='pass' placeholder="mandefro">
							</div>
							<div class="col-md-6 form-it">
								<label>city</label>
								<select>
								  <option value="united">adiss ababa</option>
								  <option value="saab">Others</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="col-md-2">
								<input class="submit" type="submit" value="save">
							</div>
						</div>	
					</form>
					<form action="#" class="password">
						<h4>02. Change password</h4>
						<div class="row">
							<div class="col-md-6 form-it">
								<label>Old Password</label>
								<input type="text" placeholder="**********">
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 form-it">
								<label>New Password</label>
								<input type="text" placeholder="***************">
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 form-it">
								<label>Confirm New Password</label>
								<input type="text" placeholder="*************** ">
							</div>
						</div>
						<div class="row">
							<div class="col-md-2">
								<input class="submit" type="submit" value="change">
							</div>
						</div>	
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- footer section-->

<script src="../js/jquery.js"></script>
<script src="../js/plugins.js"></script>
<script src="../js/plugins2.js"></script>
<script src="../js/custom.js"></script>
</body>

<!-- userprofile14:04-->
</html>