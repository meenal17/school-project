<?php
if (!isset($_SESSION)) {
	session_start();
}
include('../admin/admininclude/header.php');
include('../dbconn.php');

if (isset($_SESSION['is_admin_login'])) {
	$adminemail = $_SESSION['adminlogemail'];
} else {
	echo "<script>location.href='../index.php';</script>";
}
$adminemail=$_SESSION['adminlogemail'];
if(isset($_REQUEST['oldpassbtn'])){
	if($_REQUEST['admin_email']=="" || $_REQUEST['old_pass']=="" || $_REQUEST['new_pass']=="" || $_REQUEST['confirm_pass']==""){
		$passmsg='<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Please Fill All Feild </div>';	
	}else{
 $admin_email=$_REQUEST['admin_email'];
 $old_pass=$_REQUEST['old_pass'];
 $new_pass=$_REQUEST['new_pass'];
 $confirm_pass=$_REQUEST['confirm_pass'];
 $sql="SELECT * FROM admin WHERE admin_email='$admin_email' AND admin_pass='$old_pass'";
 $result=$conn->query($sql);
 //$row= $result->num_rows;
//echo "$sql";
 //$result=$conn->query($sql)
if($result->num_rows>0){
 	if($new_pass==$confirm_pass){
$sql="UPDATE admin SET admin_pass='$new_pass' WHERE admin_email='$admin_email' ";
if($conn->query($sql)==TRUE){
	$passmsg='<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Password Updated </div>';	
}else{
	$passmsg='<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">Unable to update</div>';
}
	 }	else{
		$passmsg='<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Enter same  password</div>';	 
	 }
  }else{
 	$passmsg='<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Old password is incorrect !!</div>';	
  }
}
}
// if (isset($_REQUEST['oldpassbtn'])) {
// 	if ($_REQUEST['admin_email'] == "" || $_REQUEST['old_pass'] == "" || $_REQUEST['new_pass'] == "" || $_REQUEST['confirm_pass'] == "") {
// 		$passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Please Fill All Feild </div>';
// 	} else {	
// 		$result = $conn->query($sql);
// 		$row = $result->fetch_assoc();
// 		//assign variable
// 		$admin_id = $_REQUEST['admin_id'];
// 		$oldpass = $_REQUEST['admin_pass'];
// 		$new_pass = $_REQUEST['new_pass'];
// 		$confirm_pass = $_REQUEST['confirm_pass'];
// 		if (isset($_REQUEST['oldpassbtn'])) {
// 			$inputoldpass = $_REQUEST['inputoldpass'];
// 			if ($oldpass == $new_pass) {
// 				if ($new_pass == $confirm_pass) {
// 					$sql = "UPDATE admin SET admin_pass='$new_pass'WHERE admin_id=$admin_id";
// 					if ($conn->query($sql) == TRUE) {
// 						$passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert" >Update successfully </div>';
// 					} else {
// 						$passmsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert" >Incorrect Password </div>';
// 					}
// 				}
// 			}
// 		}
// 	}
//}
?>
<div class="col-sm-9 mt-5">
	<div class="row">
		<div class="col-sm-6">
			<form class="mt-5 mx-5">
				<div class="from-group">
					<label for="inputemail">Email</label>
					<input type="email" class="form-control" id="admin_email" name="admin_email" value="<?php echo $adminemail ?>" readonly>
				</div>
				<div class="form-group">
					<label for="inputoldpass">Old Password</label>
					<input type="text" class="form-control" id="old_pass" placeholder="Old Password" name="old_pass">
				</div>
				<div class="form-group">
					<input type="text" class="form-control" id="new_pass" placeholder="New Password" name="new_pass">
				</div>
				<div class="form-group">
					<input type="text" class="form-control" id="confirm_pass" placeholder="Confirm Password" name="confirm_pass">
				</div>
				<div class="text-center">
					<button type="Submit" class="btn btn-success mt-2" id="oldpassbtn" name="oldpassbtn">Confirm</button>
					<a href="adminchngpass.php" class="btn btn-secondary mt-2">Close</a>
				</div>
		</div>
		</form>
		<?php
		if (isset($passmsg)) {
			echo $passmsg;
		};
		?>
	</div>
</div>
</div>
<?php
include('../admin/admininclude/footer.php');
?>