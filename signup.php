<!DOCTYPE html>
<html>

<head>
	<!--<script src="jquery.js"></script>-->
	<title>Sign Up - Communication Wizard</title>
	<style>
		@font-face {
			font-family: 'Anurati';
			src: url("fonts/Anurati-Regular.otf");
		}

		html {
			margin: 0;
			padding: 0;
		}

		body {
			font-family: Bahnschrift Light;
			text-align: center;
			width: 100%;
			margin: 0;
			padding: 0;
		}

		.heading {
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
			margin-top: 10px;
		}

		#abc {
			margin-left: 40%;
		}

		.ab {
			margin-top: 10px;
		}

		.innovation {
			background-color: black;
			color: white;
			font-size: 200%;
		}

		.benefits {
			font-family: Anurati;
			color: #3366cc;
			font-size: 300%;
		}

		form {
			background-color: black;
			width: 30%;
			margin: 0 auto;
			color: white;
			padding: 2%;
			border-radius: 8%;
		}

		.signupBox {
			margin-top: 2%;
			padding: 2%;
			background-image: url('img/comm1.jpg');
		}

		.signup {
			border: 0;
			background-color: #3366cc;
			cursor: pointer;
		}
	</style>
</head>

<body>

	<!--<script>
		$(document).ready(function () {

			$("#msg").css("display", "none");
			$("#submit").click(function () {

				$("#msg").css("display", "block");
				var flag = true;

				$("input").each(function (index) {
					if ($(this).val() == "") {
						$("#msg").val($(this).attr("name") + " field is empty");

						flag = false;
						return false;
					}
				});
				if (true) {
					var name_regex = /^[a-zA-Z ]{2,30}$/;
					if (!name_regex.test($("#name").val())) {
						flag = false;
						$("#msg").text("Invalid Name");
						alert("Invalid Name");

					}
					var regno_regex = /^[\d]{2}[A-Z]{3}[\d]{4}$/;
					if (!regno_regex.test($("#reg").val())) {
						flag = false;
						$("#msg").text("Invalid Registration number");
						alert("invalid registration number");
					}
					var email_regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
					if (!email_regex.test($("#email").val())) {
						flag = false;
						$("#msg").text("Invalid Mail Address");
						alert("invalid email");
					}
					var username_regex = /^[A-Za-z0-9]{5,20}$/;
					if (!username_regex.test($("#username").val())) {
						flag = false;
						$("#msg").text("Invalid username");
						alert("Invalid Username");
					}
					var password_regex = /^[A-Za-z0-9]{8,40}$/;
					if (!password_regex.test($("#password").val())) {
						flag = false;
						$("#msg").val("Password should be atleast 8 characters");
						alert("Invalid Password, atleast 8 characters");

					}
					var branch = /^[A-Za-z]{2,20}$/;
					if (!branch.test($("#branch").val())) {
						flag = false;
						$("#msg").text("Branch should have atleast 2 characters");
						alert("Branch should have atleast 2 characters");
					}
				}
				if (flag) {
					$("#msg").css("display", "none");
					alert("Form Submitted Successfully!!");
				}

			})
		});
	</script>-->

	<div class="topnav">
		<img align="left" src="img/logo1.png">
		<a id="abc" class="ab" href="homepage.php">Home</a>
		<a class="ab" href="aboutus.php">About</a>
		<a class="ab" href="faqs.php">FAQs</a>
		<a class="ab" href="books.php">Books</a>
		<a class="ab" href="qp.php">Question Papers</a>
		<a class="ab" href="login.php">Login</a>
		<a class="ab" href="signup.php">Signup</a>
	</div>

	<div class="signupBox">
		<form action="signup.inc.php" method="post">
			<h1 class="benefits">SI GN UP FOR IBENEFI TS</S></h1>
			Name : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="name" id="name"><br><br>
			Reg. No.: &nbsp&nbsp&nbsp&nbsp<input type="text" name="reg" id="reg"><br><br>
			Email : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="email" id="email"><br><br>
			Username : <input type="text" name="username" id="username"><br><br>
			Password : &nbsp<input type="password" name="password" id="password"><br><br>
			Branch : &nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="branch" id="branch"><br><br>
			<input type="submit" name="submit" value="Sign Up" class="signup" id="submit">

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