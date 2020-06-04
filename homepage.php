<html>
    <head>
        <title>College collaboration platform</title>

        <style>
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
            font-size: 98%; 
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

            body, html {
            height: 100%;
            }

            * {
            box-sizing: border-box;
            }

            .bg-image {
            /* The image used */
            background-image: url("students.jpg");

            /* Add the blur effect */
            filter: blur(8px);
            -webkit-filter: blur(8px);

            /* Full height */
            height: 100%; 

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            }

            /* Position text in the middle of the page/image */
            .bg-text {
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0, 0.3); /* Black w/opacity/see-through */
            color:white;
            font-family:Bahnschrift Light;
            border: 5px solid #f1f1f1;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 2;
            width: 80%;
            height:50%;
            padding: 20px;
            text-align: center;
            font-size: 25;
            }
        
            .heading{
                margin-top: 10px;
                font-size: 70;
                font-family:Brush Script MT;
                color:black;
                font-weight:100;
            }

            .benefits{
                margin: 2px auto;
                border-radius: 5px;
                padding-top:10px;
                padding-bottom:10px;
                color:black;
                font-size:25;
                /*background-image: linear-gradient(90deg,#ABDCC4,#B5EAD0);*/
                background-image:url("img/6.jpg");
                
            }
            .benefits ul li{
                list-style-image: url(lsi2.svg);
            }
            .hr{
                margin-right: 1000px;
                
            }

            * {box-sizing: border-box;}
            body {font-family: Verdana, sans-serif;}
            
            .mySlides {
                display: none;
                width: 100%;
            }
            img {vertical-align: middle;}

            .main-slideshow-container{
                position: relative;
                background-image: url("img/8.jpg");
                border-radius: 5px;
            } 
            /* Slideshow container */
            .slideshow-container {
            border-radius: 5px;
            max-width: 65%;
            position: relative;
            margin: auto;
            padding: 20px;
            }
            
            /* Caption text */
            .text {
            background-color: black;
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 20px;
            width: 96.1%;
            text-align: center;
            opacity:0.8;
            }

            /* Number text (1/3 etc) */
            .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
            }

            /* The dots/bullets/indicators */
            .dot {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
            }

            .active {
            background-color: #717171;
            }

            /* Fading animation */
            .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
            }

            @-webkit-keyframes fade {
            from {opacity: .4} 
            to {opacity: 1}
            }

            @keyframes fade {
            from {opacity: .4} 
            to {opacity: 1}
            }

            /* On smaller screens, decrease text size */
            @media only screen and (max-width: 300px) {
            .text {font-size: 11px}
            }

            .innovation{
			background-color: black;
			color: white;
            font-size: 200%;
            text-align: center;
            margin-top: 0;
            }

            .innovation p{
                margin-top: 0;
            }
        
        </style>
    </head>
    <link rel="shortcut icon" href="img/9c.ico" />
    <body>
        
        <div class="topnav">
            <img align="left" src="img/logo1.png">
            <!-- <a class="active" href="#home">Home</a>
            <a class="ab" href="#chat">Chat</a>
            <a class="ab" href="#questionpapers">Question Papers</a>
            <a class="ab" href="#books">Books</a>
            <a class="ab" href="#contact">Contact</a>
            <a class="ab" href="#about">About</a>
            <a class="ab" href="#login">Login</a>  -->
            <a id="abc"class="ab" href="homepage.php">Home</a>
			<a class="ab" href="aboutus.php">About</a>
			<a class="ab" href="faqs.php">FAQs</a>
			<!-- <a href="#">Chat</a> -->
			<a class="ab" href="books.php">Books</a>	
			<a class="ab" href="qp.php">Question Papers</a>
			<a class="ab" href="login.php">Login</a>
			<a class="ab" href="signup.php">Signup</a>
            
 
            <!--<img src="students.jpg" width="1567px" height="720px">-->
            
        </div>
        <div class="bg-image"></div>
            <div class="bg-text">
            <p class="heading" align="center"><b>Communication Wizard</b></p>
            <p>Your top destination for interaction <br>
              Ease of access to all course books and previous year question papers!!!</p>
        </div>
        
            
        <div class="benefits">
            <ul class="ul">
                <li>Solution to all your problems at one place</li>
                <hr  class="hr" color="#726d6c">
                <li>Interaction made easy</li>
                <hr  class="hr" color="#726d6c"> 
                <li>Books at cheapest prices</li>
                <hr  class="hr" color="#726d6c">
                <li>One to one communication with seniors</li>
                <hr  class="hr" color="#726d6c">
                <li>Access all previous year question papers</li>
                <hr  class="hr" color="#726d6c">
            </ul>
        </div>
        <div class="main-slideshow-container">
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
        <div class="main-slideshow-container">
            <div class="innovation">
                <p>BEYOND IMAGINATION, OUR INNOVATION</p>
            </div>
            <div class="footer">
                <p align="center">&copy 2019</p>
            </div>
        </div>
        <!-- <br> -->
        <!-- <iframe src="foot.html" width="100%" height="50%" frameborder="0" style="margin: 0;"></iframe> -->
        <!-- <script>
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
                setTimeout(showSlides, 5000); // Change image every 2 seconds
            }
        </script> -->

    </body>
</html>