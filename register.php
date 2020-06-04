<?php

session_start();

$name="";
$username="";
$password="";
$email="";
$reg="";
$branch=""; 

$errors=array();

$db=mysqli_connect("localhost","root","","communication");

$name=mysqli_real_escape_string($db,$_POST['name']);
$username=mysqli_real_escape_string($db,$_POST['username']);
$password=mysqli_real_escape_string($db,$_POST['password']);
$email=mysqli_real_escape_string($db,$_POST['email']);
$reg=mysqli_real_escape_string($db,$_POST['reg']);
$branch=mysqli_real_escape_string($db,$_POST['branch']);

if(empty($name)) {array_push($errors, "Name is Required")};
if(empty($username)) {array_push($errors, "Username is Required")};
if(empty($password)) {array_push($errors, "Password is Required")};
if(empty($email)) {array_push($errors, "Email is Required")};
if(empty($reg)) {array_push($errors, "Registration no. is Required")};
if(empty($brach)) {array_push($errors, "Branch is Required")};

$user_check_query="SELECT * FROM user WHERE username='$username' or email = '$email' LIMIT 1";

$results=mysqli_query($db,$user_check_query);
$user=mysqli_fetch_assoc($results)
if($user){
	if($user['username']===$username){
		array_push($errors, "Username already exists");
	}
	if($user['email']===$email){
		array_push($errors, "Email already exists");
	}
}

if(count($errors)==0){
	$query="INSERT INTO user(name,username,password,email,reg,branch) VALUES("$name","$username","$password","$email","$reg","$branch")";
	mysqli_query($db,$query);	

	$_SESSION['username']=$username;
	$_SESSION['success']="You are now logged in";

	header("location:homepage1.php");
}
?>