<?php
include('../admin/admininclude/header.php');
include('../dbconn.php');
if(isset($_REQUEST['submitbtn'])){
if (($_REQUEST['c_name'] == "") || ($_REQUEST['c_desc'] == "") || ($_REQUEST['c_author'] == "") || ($_REQUEST['c_duration'] == "") || ($_REQUEST['c_price'] == "") || ($_REQUEST['c_org_price'] == "")) {
$msg= '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All Feilds</div>';
}
else{
$c_name=$_REQUEST['c_name']; 
$c_desc=$_REQUEST['c_desc'];
$c_author=$_REQUEST['c_author'];
$c_duration=$_REQUEST['c_duration'];
$c_price=$_REQUEST['c_price'];
$c_org_price=$_REQUEST['c_org_price'];
$c_img=$_FILES['c_img']['name'];
$c_img_temp=$_FILES['c_img']['tmp_name'];
$img_folder='../image/courseimages/'.$c_img;
move_uploaded_file($c_img_temp,$img_folder);
$sql="INSERT INTO course (c_name,c_desc,c_author,c_duration,c_price,c_org_price,c_img)VALUES('$c_name','$c_desc','$c_author','$c_duration','$c_price','$c_org_price','$img_folder')";
if($conn->query($sql)==TRUE){
$msg= '<div class="alert alert-success col-sm-6 ml-5 mt-2">Course Added Successfully</div>';
}else{ 
 $msg= '<div class="alert alert-danger col-sm-6 ml-5 mt-2">Unable to add</div>';
}
}
}
?>
<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Add New Courses</h3>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="c_name">Course Name</label>
            <input type="text" class="form-control" id="c_name" name="c_name">
        </div>
        <div class="form-group">
            <label for="c_desc">Course Description</label>
            <textarea class="form-control" id="c_desc" name="c_desc" row=2></textarea>
        </div>
        <div class="form-group">
            <label for="c_author">Author</label>
            <input type="text" class="form-control" id="c_author" name="c_author">
        </div>
        <div class="form-group">
          <label for="c_duration">Duration</label>
          <input type="text" class="form-control" id="c_duration" name="c_duration">
        </div>
        <div class="form-group">
            <label for="c_price">Course Price</label>
            <input type="text" class="form-control" id="c_price" name="c_price">
        </div>
        <div class="form-group">
            <label for="c_org_price">Course Original Price</label>
            <input type="text" class="form-control" id="c_org_price" name="c_org_price">
        </div>
        <div class="form-group">
            <label for="c_img">Image</label>
            <input type="file" class="form-control-file" id="c_img" name="c_img">
        </div>
        <div class="text-center">
            <button type="Submit" class="btn btn-success mt-2" id="submitbtn" name="submitbtn">Submit</button>
            <a href="courses.php" class="btn btn-secondary mt-2">Close</a>
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