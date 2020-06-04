<!DOCTYPE html>
<html>
<head>
	<title>Communication Wizard</title>
	<style>
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
		.heading1{
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
		/* .navbar1{
			padding: 1%;
			margin-top: 0.7%;
			width: 60%;
		}
		.navbar1 a{
			text-decoration: none;
			padding: 3%;
			color: white;
			font-size: 110%;
		}
		.navbar1 a:hover{
			color: grey;
			background-color: #d9d9d9;
		} */
		.innovation{
			background-color: black;
			color: white;
			font-size: 200%;
		}
		.columns img{
			width: 50%;
		}
		.class1{
			background-color: #003d66;
		}
		hr{
			color:black;
		}
		.main-slideshow-container{
			position: relative;
			background-image: url("img/8.jpg");
			border-radius: 5px;
		} 
		.box{
			background-color: #003d66;
		}
		.box h2{
			color: black;
		}
		.box hr{
			border: 1px solid black;
		}
		.box div a img{
			border: 2px solid black;
		}
	</style>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">
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

	<!-- <div class="heading1">
		<div class="logo1">
			<img src="img/logo1.PNG">
		</div>
		<div class="navbar1">
			<a href="homepage.html">Home</a>
			<a href="aboutus.html">About</a>
			<a href="faqs.html">FAQs</a>
			<a href="books.html">Books</a>	
			<a href="qp.html">Question Papers</a>
			<a href="login.html">Login</a>
			<a href="signup.html">Signup</a>
		</div>
	</div> -->

	<div class="box is-bordered colored">
		<hr>
		<h2 class="subtitle">Basic Electrical and Electronics Engineering(EEE 1001) </h2>
		<div class="columns">

			<div class="column">
				<a href="Papers/EEE 2.pdf"><img src="img/E1.PNG" alt=""></a>
			</div>
			<div class="column">
				<a href="Papers/EEE 1.pdf"><img src="img/E2.PNG" alt=""></a>
			</div>
			<div class="column">
				<a href="Papers/EEE 3.pdf"><img src="img/E3.PNG" alt=""></a>
			</div>
		</div>
		<hr>
		<h2 class="subtitle">Engineering Physics(PHY 1701) </h2>
		<div class="columns">
			<div class="column">
				<a href="Papers/P1.pdf"><img src="img/P1.PNG" alt=""></a>
			</div>
			<div class="column">
				<a href="Papers/P2.pdf"><img src="img/P2.PNG" alt=""></a>
			</div>
			<div class="column">
				<a href="Papers/P3.pdf"><img src="img/P3.PNG" alt=""></a>
			</div>
		</div>
		<hr>
		<h2 class="subtitle">Engineering Chemistry(CHY 1701) </h2>
		<div class="columns">
			<div class="column">
				<a href="Papers/C1.pdf"><img src="img/C1.PNG" alt=""></a>
			</div>
			<div class="column">
				<a href="Papers/C2.pdf"><img src="img/C2.PNG" alt=""></a>
			</div>
			<div class="column">
				<a href="Papers/C3.pdf"><img src="img/C3.PNG" alt=""></a>
			</div>
		</div>
		<hr> 
	</div>

	<div class="main-slideshow-container">
		<div class="innovation">
			<p>BEYOND IMAGINATION, OUR INNOVATION</p>
		</div>

		<div class="footer">
			<p>&copy 2019</p>
		</div>
	</div>
</body>
</html>