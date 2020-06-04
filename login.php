<!DOCTYPE html>
<html>
<head>
	<title>Login - Communication Wizard</title>
	<style>
		@font-face {
		    font-family: 'Anurati';
		    src: url("fonts/Anurati-Regular.otf");
		}
		html{
			margin: 0;
			padding: 0;
		}
		body{
			font-family:Bahnschrift Light;
			text-align: center;
			width: 100%;
			margin: 0;
			padding: 0;
		}
		.heading{
			margin-top: 1%;
			display: flex;
			justify-content: space-between;
			background-color: #404040;
			color: white;
			padding: 1%;
		}
		.topnav {
		background-color: #333;
		overflow: hidden;
		}

		.topnav a {
		float: left;
		color: #f2f2f2;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
		font-size: 125%; 
		}

		.topnav a:hover {
		background-color: rgb(109, 109, 109);
		color: black;
		}

		.topnav a.active {
		background-color: rgb(72, 73, 72);
		color: white;
		margin-left: 660px;
		margin-top:10px;
		}

		#abc{
			margin-left: 40%;
		}
		
		.ab{
			margin-top:10px;
		}
		/* .navbar{
			padding: 1%;
			margin-top: 0.7%;
			width: 60%;
		}
		.navbar a{
			text-decoration: none;
			padding: 3%;
			color: white;
			font-size: 110%;
		}
		.navbar a:hover{
			color: grey;
			background-color: #d9d9d9;
		} */
		.innovation{
			background-color: black;
			color: white;
			font-size: 200%;
		}
		.loginBox{
			margin-top: 2%;
			padding: 4%;
			background-image: url('img/comm1.jpg');
		}
		form{
			background-color: black;
			width: 30%;
			margin: 0 auto;
			color: white;
			padding: 3%;
			border-radius: 8%;
		}
		h1.explore{
			font-family: Anurati;
			color: #3366cc;
			font-size: 300%;
		}
		input.submit{
			width:20%;
			height: 100%;
			background-color: #3366cc;
			border:0;
			cursor: pointer;
		}
	</style>
</head>
<body>

	<div class="topnav">
		<img align="left" src="img/logo1.png">
		<a id="abc"class="ab" href="homepage.php">Home</a>
		<a class="ab" href="aboutus.php">About</a>
		<a class="ab" href="faqs.php">FAQs</a>
		<a class="ab" href="books.php">Books</a>	
		<a class="ab" href="qp.php">Question Papers</a>
		<a class="ab" href="login.php">Login</a>
		<a class="ab" href="signup.php">Signup</a>
	</div>

	<!-- <div class="heading">
		<div class="logo">
			<img src="img/logo1.PNG">
		</div>
		<div class="navbar">
			<a href="homepage.html">Home</a>
			<a href="aboutus.html">About</a>
			<a href="faqs.html">FAQs</a>
			<a href="#">Chat</a>
			<a href="books.html">Books</a>	
			<a href="qp.html">Question Papers</a>
			<a href="login.html">Login</a>
			<a href="signup.html">Signup</a>
		</div>
	</div> -->

	<div class="loginBox">
		<form method="post" action="#">
			<h1 class="explore">LOG I N &nbsp TO EXPLORE</h1>
			<input type="text" name="username" placeholder="Username"><br><br>
			<input type="password" name="password" placeholder="Password"><br><br>
			<input type="submit" name="submit" value="Login" class="submit">
		</form>
	</div>

	<div class="innovation">
      	<p>BEYOND IMAGINATION, OUR INNOVATION</p>
    </div>

    <div class="footer">
       	<p>&copy 2019</p>
    </div>
</body>
</html>