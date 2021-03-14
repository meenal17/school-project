<?php
if(!isset($_SESSION)){
	session_start();
}
include('../admin/admininclude/header.php');
include('../dbconn.php');
?>
<div class="col-sm-9 mt-5">
<div class="row">
<div class="col-sm-6">
<div class="form-group">
<input type="text" class="form-control" id="newpass" placeholder="New Password" name="newpass">
</div>
<div class="form-group">
<input type="text" class="form-control" id="confirmpass" placeholder="Confirm Password" name="confirmpass">
</div>
<div class="text-center">
<button type="Submit" class="btn btn-success mt-2" id="updpassbtn" name="updpassbtn">Update</button>
<a href="adminchngpass.php" class="btn btn-secondary mt-2">Close</a>
</div>
</form>
 </div>
</div>
</div>
<?php
include('../admin/admininclude/footer.php');
?>