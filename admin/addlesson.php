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
if(isset($_REQUEST['lessonsubmitbtn'])){
if (($_REQUEST['c_id'] == "") || ($_REQUEST['c_name'] == "") || ($_REQUEST['l_name'] == "")|| ($_REQUEST['l_desc'] == "")) {
$msg= '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All Feilds</div>';
}
else{
$c_id=$_REQUEST['c_id'];
$c_name=$_REQUEST['c_name'];
$l_name=$_REQUEST['l_name']; 
$l_desc=$_REQUEST['l_desc'];
$l_link=$_FILES['l_link']['name'];
 $l_link_temp=$_FILES['l_link']['tmp_name'];
 $l_folder='../lessonvid/'.$l_link; 
 move_uploaded_file($l_link_temp,$l_folder);
$sql="INSERT INTO lesson (c_id,c_name,l_name,l_desc,l_link)VALUES('$c_id','$c_name','$l_name','$l_desc','$l_folder')";
if($conn->query($sql)==TRUE){
$msg= '<div class="alert alert-success col-sm-6 ml-5 mt-2">Lesson Added Successfully</div>';
}else{ 
 $msg= '<div class="alert alert-danger col-sm-6 ml-5 mt-2">Unable to add</div>';
}
}
}
?>
<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Add Lesson</h3>
    <form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
            <label for="c_id">ID</label>
            <input type="text" class="form-control" id="c_id" name="c_id" value="<?php if(isset($_SESSION['c_id'])){echo $_SESSION['c_id'];}?>"readonly>
        </div>
        <div class="form-group">
            <label for="c_name">Course Name</label>
            <input type="text" class="form-control" id="c_name" name="c_name" value="<?php if(isset($_SESSION['c_name'])){echo $_SESSION['c_name'];}?>"readonly>
        </div>
        <div class="form-group">
            <label for="l_name">Lesson Name</label>
            <input type="text" class="form-control" id="l_name" name="l_name">
        </div>
        <div class="form-group">
            <label for="l_desc"> Description</label>
            <textarea class="form-control" id="l_desc" name="l_desc" row=2></textarea>
        </div>
        <div class="form-group">
            <label for="l_link">Lesson Vedio Link</label>
            <input type="file" class="form-control-file" id="l_link" name="l_link">
        </div>
                <div class="text-center">
            <button type="Submit" class="btn btn-success mt-2" id="lessonsubmitbtn" name="lessonsubmitbtn">Submit</button>
            <a href="lesson.php" class="btn btn-secondary mt-2">Close</a>
        </div>
    </form>
    <?php
    if(isset($msg)){
         echo $msg;
    }
    ?>
    </div> 
</div>
</div>
<?php
include('../admin/admininclude/footer.php');
?>