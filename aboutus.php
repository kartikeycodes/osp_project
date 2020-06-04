<!DOCTYPE html>
<html>
<head>
	<title>About Us - Communication Wizard</title>
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
		.heading{
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
			margin-top: 0;
		}
		
		.aboutusBox{
			display: flex;
			background-color: #6699ff
		}
		img.img1{
			width: 50%;
			padding: 2%;
		}
		.main-slideshow-container{
                position: relative;
                background-image: url("img/8.jpg");
                border-radius: 5px;
            } 
		.slideshow-container{
			width: 50%;
			margin:0 auto;
			margin-top:1%; 
			background-color: #ffcc66;
		}
		.slideshow{
			background-color: #ffcc66;
			padding: 1%;
		}
		p.aboutusDetails{
			font-size: 1.8em;
		}
		.content{
			padding-left: 1.2%;
			width: 70%;
			text-align: justify;
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
		<div class="topnav">
			<a id="abc" href="homepage.html">Home</a>
			<a href="aboutus.html">About</a>
			<a href="faqs.html">FAQs</a>
			<a href="books.html">Books</a>	
			<a href="qp.html">Question Papers</a>
			<a href="login.html">Login</a>
			<a href="signup.html">Signup</a>
		</div>
	</div> -->
	<div class="slideshow">
	<div class="slideshow-container">
                <div class="mySlides fade">
                    <img src="img/1.jpeg" style="width:100%">
                    <div class="text">“Everyone we interact with becomes a part of us.” 
                    </div>
                </div>
                
                <div class="mySlides fade">
                    <img src="img/2.jpg" style="width:100%">
                    <div class="text">"The beautiful thing about learning is that no one can take it from you."</div>
                </div>
                
                <div class="mySlides fade">
                    <img src="img/3.jpg" style="width:100%">
                    <div class="text">"I swear to you, you would not be able to live your college right, if you don't use this site."</div>
                </div> 
    	</div>
    </div>

	<div class="aboutusBox">
		<div class="content">
		<p class="aboutusDetails">We, at Communication Wizard, provide a platform for all kinds of Students to solve all of their problem by means of interaction with their Seniors and fellow Classmates. We also help in getting them the books that they may require. More than this, the most highlighted thing is that there is also a section where a lot of previous year question papers can be found. So, all students should Signin and take the advantage of Communication Wizard.</p>
		</div>
		<div class="aboutImg">
			<img src="img/aboutusimg.jpg" class="img1">
		</div>
	</div>

    <script>
            var slideIndex = 0;
            showSlides();
            
            function showSlides() {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("dot");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";  
                }
                slideIndex++;
                if (slideIndex > slides.length) {slideIndex = 1}    
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex-1].style.display = "block";  
                //dots[slideIndex-1].className += " active";
                setTimeout(showSlides, 2000); // Change image every 2 seconds
            }
		</script>
		
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