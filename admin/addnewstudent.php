<?php
include('../admin/admininclude/header.php');
include('../dbconn.php');
if(isset($_REQUEST['newsubmitbtn'])){
if (($_REQUEST['stu_name'] == "") || ($_REQUEST['stu_email'] == "") || ($_REQUEST['stu_pass'] == "") || ($_REQUEST['stu_occ'] == "")) {
$msg= '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All Feilds</div>';
}
else{
$stu_name=$_REQUEST['stu_name']; 
$stu_email=$_REQUEST['stu_email'];
$stu_pass=$_REQUEST['stu_pass'];
$stu_occ=$_REQUEST['stu_occ'];
// $c_img=$_FILES['c_img']['name'];
// $c_img_temp=$_FILES['c_img']['tmp_name'];
// $img_folder='../image/courseimages/'.$c_img;
// move_uploaded_file($c_img_temp,$img_folder);
$sql="INSERT INTO student_tb (stu_name,stu_email,stu_pass,stu_occ)VALUES('$stu_name','$stu_email','$stu_pass','$stu_occ')";
if($conn->query($sql)==TRUE){
$msg= '<div class="alert alert-success col-sm-6 ml-5 mt-2">Successfully Added</div>';
}else{ 
 $msg= '<div class="alert alert-danger col-sm-6 ml-5 mt-2">Something wrong try again</div>';
}
}
}
?>
<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Add New Student</h3>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="stu_name">Name</label>
            <input type="text" class="form-control" id="stu_name" name="stu_name">
        </div>
        <div class="form-group">
            <label for="stu_email">Email</label>
             <input type="email" class="form-control" id="stu_name" name="stu_email">
        </div>
        <div class="form-group">
            <label for="stu_email">Password</label>
             <input type="password" class="form-control" id="stu_pass" name="stu_pass">
        </div>
        <div class="form-group">
            <label for="stu_occ">Occupation</label>
             <input type="text" class="form-control" id="stu_occ" name="stu_occ">
        </div>
        <div class="text-center">
        <button type="Submit" class="btn btn-success mt-2" id="newsubmitbtn" name="newsubmitbtn">Submit</button>
         <a href="student.php" class="btn btn-secondary mt-2">Close</a>
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