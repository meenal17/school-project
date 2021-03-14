<!--Start header-->
<?php
include('./maininclude/header.php');
?>
<!--end header-->
<!--start vedio background-->
<div class="container-fluid remove-vid-marg">
	<div class="vid-parent">
	<video playsinline autoplay muted loop>
	<source src="vedio/banner.mp4">	
	</video>	
	<div class="vid-overlay"></div>
	</div>
	<div class="vid-content">
<h2 style="font-family: 'Dancing Script', cursive;">welcome</h2>
		<h1 class="my-content" style="font-family:Playfair Display;font-size:50px;color:red;"><strong>Dawn Valley School</strong></h1>
<p class="my-content"> Your Aim is Our Aim</p>
<?Php
if(!isset($_SESSION['is_login'])){
	echo'<a href="#" class="btn btn-danger mt-3"data-toggle="modal" onclick="addstu();" data-target="#sturegmodalcenter">Get Started</a>';
}else{
	echo '<a href="#" class="btn btn-primary mt-3">My Profile</a>';
}
?></div>
</div>
<!--End vedio background-->
<!--Start text banner-->
<div class="container-fluid bg-info txt-banner">
<div class="row bottom-banner">
<div class="col-sm text-white">
<h5><i class="fas fa-book-open mr-3 text-white "></i>100+ Online Courses</h5>
</div>
<div class="col-sm text-white">
<h5><i class="fas fa-users mr-3 text-white"></i>Expert Instructors</h5>
</div>
<div class="col-sm text-white">
<h5><i class="fas fa-keyboard mr-3 text-white"></i>Lifetime Access</h5>
</div>
<div class="col-sm text-white">
<h5><i class="fas fa-rupee-sign mr-3 text-white"></i>Money Back Guaranet*</h5>
</div>
</div>
</div>
<!--End text banner-->
<!--startmost popular courses-->
<div class="container mt-5">
	<h1 class="text-center">Popular Courses</h1>
<!--startmost popular couses 1stcard-->
<div class="card-deck mt-4">
	<a href="#" class="btn text-dark" style="text-align:left;padding:0px; margin:0px;">
<div class="card">
  <img src="image/card/b.jpg" class="card-img-top" alt="Guitar"/>
  <div class="card-body">
    <h5 class="card-title">Learn Guitar Easy Way</h5>
    <p class="card-text">Lorem ipsum dolor sit amet.</p>
  </div>
  <div class="card-footer">
  	<p class="card-text d-inline">Price:<small><del>&#8377 2000</del></small><span class="font-weight-bolder">&#8377 200</span></p><a  class="btn btn-primary text-white font-weight-bolder float-right" href="">Enroll</a>
  </div>
</div>
</a>
<a href="#" class="btn text-dark" style="text-align:left;padding:0px; margin:0px;">
<div class="card">
  <img src="image/card/b.jpg" class="card-img-top" alt="Guitar"/>
  <div class="card-body">
    <h5 class="card-title">Learn Programming</h5>
    <p class="card-text">Lorem ipsum dolor sit amet.</p>
  </div>
  <div class="card-footer">
  	<p class="card-text d-inline">Price:<small><del>&#8377 2000</del></small><span class="font-weight-bolder">&#8377 200</span></p><a  class="btn btn-primary text-white font-weight-bolder float-right" href="">Enroll</a>
  </div>
</div>
</a><a href="#" class="btn text-dark" style="text-align:left;padding:0px; margin:0px;">
<div class="card">
  <img src="image/card/b.jpg" class="card-img-top" alt="Guitar"/>
  <div class="card-body">
    <h5 class="card-title">Learn Dance</h5>
    <p class="card-text">Lorem ipsum dolor sit amet.>
  </div>
  <div class="card-footer">
  	<p class="card-text d-inline">Price:<small><del>&#8377 2000</del></small><span class="font-weight-bolder">&#8377 200</span></p><a  class="btn btn-primary text-white font-weight-bolder float-right" href="">Enroll</a>
  </div>
</div>
</a>
</div>
<div class="text-center m-2">
  <a href="#" class="btn btn-danger btn-sm">Veiw All</a>
</div>
</div>
<!--End most popular card-->
<!--Countact us form-->
<?php
include('./contact.php');
?>
<!---Endconact us--->
<div class="container-fluid bg-dark">
	<div class="row text-white text-center p-2">
	<div class="col-sm">
<a href="#" class="text-white social-hover"><i class="fab fa-facebook-f"></i>Facebook</a>		
	</div>
	<div class="col-sm">
<a href="#" class="text-white social-hover"><i class="fab fa-twitter"></i>Twitter</a>		
	</div>
	<div class="col-sm">
<a href="#" class="text-white social-hover"><i class="fab fa-whatsapp"></i>Whatsapp</a>		
	</div>
	<div class="col-sm">
<a href="#" class="text-white social-hover"><i class="fab fa-instagram"></i>Instagram</a>		
	</div>
</div>
</div>
</div>
<div class="container-fluid p-4" style="background-color: #E9ECEF">
<div class="container" style="background-color: #E9ECEF">
	<div class="col-sm">
		<h5>About Us</h5>
<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, facilis, iure. Consectetur obcaecati, rerum maiores beatae suscipit! Earum possimus tenetur alias ipsa distinctio, eum atque. Fugiat, quia. Sed, excepturi beatae.	
</p><br>
<div class="col-sm">
<h5>Category</h5>
<a href="#" class="text-dark">Web dovelopement</a>	
<a href="#" class="text-dark">Web designing</a>
<a href="#" class="text-dark">Andorid App Dev</a>
<a href="#" class="text-dark">Data Analysis</a>
<a href="#" class="text-dark">IOS Dev</a>
</div>	<br>
<div class="col-sm">
	<h5>Contact Us</h5>
	<p>Dawn valley school Pvt.Ltd <br>Near Police Camp II <br>Ahemdabad,Gujrat<br>Ph.987654060</p>
</div>
</div>
</div>	
</div>
</div>
<!--- Start Footer include footer--->
<?php
include('./maininclude/footer.php');
?>
<!--- End Footer include footer--->