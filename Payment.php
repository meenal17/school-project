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
<div class="container-fluid">
<h2 class="text-center text-danger my-4">Your Payment Status</h2>
<form method="POST"action="">
<div class="form-group row">
<label class="offset-sm-3 col-form-label">Order ID:</label>	
<div>
<input type="text" class="form-control mx-3">
</div>
<div>
<input type="submit"class="btn btn-primary mx-4" value="View">
</div>
</div>
</form>	
</div>
<!--end main conent-->
<!--contact form-->
<?php
include('./contact.php');
?>
<!-- End contact form-->
<?php
include('./maininclude/footer.php');
?>