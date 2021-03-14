<?php
include('./maininclude/header.php');
?>
<!--start coures page banner-->
<div class="container-fluid bg-dar">
<div class="row">
<img src="./image/3.jpg" alt="courses"
style="height:500px; width:100%; object-fit:cover; box-shadow: 10px;"/>
</div>
</div>
<!--end coures page banner-->

<!--Start main content-->
<div class="container-fluid mt-5">
<div class="row">
<div class="col-md-4">
<img src="./image/card/b.jpg" class="card-img-top"alt="Guitar"/>		
</div>
<div class="col-md-8">
<div class="card-body">
<h5 class="card-tittle">Course Name:Learn Guitar</h5>
<p class="card-text"> Description:Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<p class="card-text">Duration:10 Days</p>
<form action=""method="POST">
<p class="card-text d-inline">Price:<small><del>&#8377 2000</del></small>
<span class="font-weight-bolder">&#8377 200</span></p>
<button type="submit" class="btn btn-primary text-white font-weight-bolder float-right" name="buy">Buy now</button>
</form>		
</div>
</div>
</div>
<div class="container">
<div class="row">
<table class="table table-bordered table-hover">
<thead>
<tr>
<th scope="col">Lesson No.</th>
<th scope="col">Lesson Name.</th>
</tr>
</thead>
<tbody>
<tr>
<th scope="row">1</th>
<td>Introduction</td>
</tr>
</tbody>
</table>';		
</div>
</div>
<!--End main content-->
<?php
include('./maininclude/footer.php');
?>