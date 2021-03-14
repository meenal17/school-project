<?php
if(!isset($_SESSION)){
	session_start();
}
include('../admin/admininclude/header.php');
include('../dbconn.php');
if(isset($_SESSION['is_admin_login'])){
$adminEmail=$_SESSION['adminlogemail'];
}
else{
	echo "<script>location.href='../index.php';</script>";
}
?>
<div class="col-sm-9 mt-5 mx-3">
<form action="" class="mt-3 form-inline d-print-none">
<div class="form-group">
<label for="checkid">Enter Course:ID:</label>
<input type="text" class="from-control ml-3 mr-3" id="checkid" name="checkid">
</div>
<button type="submit" class="btn btn-info">search</button>
</form>
<?php
$sql="SELECT c_id FROM course";
$result=$conn->query($sql);
while($row =$result->fetch_assoc()){
    if(isset($_REQUEST['checkid'])&& $_REQUEST['checkid']==$row['c_id']){
$sql="SELECT * FROM course WHERE c_id={$_REQUEST['checkid']}";
$result=$conn->query($sql);
$row =$result->fetch_assoc();
    if(($row['c_id'])== $_REQUEST['checkid']){
$_SESSION['c_id']=$row['c_id'];
$_SESSION['c_name']=$row['c_name'];
?>
<h3 class="mt-5 bg-info text-white p-2">ID:<?php if(isset($row['c_id'])){
    echo $row['c_id'];}?> Name:<?php if(isset($row['c_name'])){
        echo $row['c_name'];}?></h3>
        <?php
    }
    }
}
?>
</div>
<?php
if(isset($_SESSION['c_id'])){
  echo '<div>
    <a class="btn btn-danger box" href="./addlesson.php"><i class="fas fa-plus fa-2x"></i></a>
    </div>' ; 
}
?>
<?php
include('../admin/admininclude/footer.php');
?>