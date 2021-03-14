<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
		<!--Bootsrap -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!--Font aswm -->
	<link rel="stylesheet" href="css/all.css">

	<!--Google font-->
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@1&display=swap" rel="stylesheet">
<!--Coustome Css-->
<link rel="stylesheet" href="css/style.css">
	<title>School mangement</title>
</head>
<body>
 <!-- <nav class="navbar navbar-expand-sm navbar-dark  pl-5 fixed-top">
  <a class="navbar-brand" href="index.php">Dawn Valley School </a>
<span class="navbar-text">Your Archivement's Our Aim</span>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavA1Markup">
    <ul class="navbar-nav custom-nav pl-5"> -->

   <!--Start navigation-->

    	<nav class="navbar navbar-expand-sm navbar-dark pl-5 fixed-top">
    		<a class="navbar-brand " href="index.php" style="color:red;">Dawn Valley School </a>
    		<span class="navbar-text">Your Archivement's Our Aim</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

          <ul class="navbar-nav pl-5 custom-nav">
            <li class="custom-nav">
      <li class="custom-nav custom-nav-item"><a class="nav-link " href="index.php">Home</a></li>
      <li class="custom-nav custom-nav-item"><a class="nav-link" href="courses.php">Course's</a></li>
      <li class="custom-nav custom-nav-item"><a class="nav-link" href="Payment.php">Payment's</a></li>
      <?php
      session_start();
      if(isset($_SESSION['is_login'])){
echo'<li class="custom-nav custom-nav-item"><a class="nav-link" href="#">Profile</a></li>
<li class="custom-nav custom-nav-item"><a class="nav-link" href="logout.php">logout</a></li>';
      }else{
        echo'<li class="custom-nav custom-nav-item"><a class="nav-link" data-toggle="modal" data-target="#stuloginmodalcenter" href="#">logIn</a></li>
        <li class="custom-nav custom-nav-item"><a class="nav-link"data-toggle="modal" data-target="#sturegmodalcenter" href="#">SignUp</a></li>';
      }
      ?>
      <li class="custom-nav custom-nav-item"><a class="nav-link" href="#">Contact</a></li>
      <li class="custom-nav custom-nav-item"><a class="nav-link" href="#">Feedback</a></li>
  
      
    </ul>
  </div>
</nav>
<!--End navigation