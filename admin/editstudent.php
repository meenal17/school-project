<?php
include('../admin/admininclude/header.php');
include('../dbconn.php');

// Fetch data
 
    if(isset($_REQUEST['view'])){
    $sql= "SELECT * FROM student_tb WHERE stu_id={$_REQUEST['id']}";
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();
    }
//update
if(isset($_REQUEST['stuupdatebtn'])){
    if(($_REQUEST['stu_id']== "") || ($_REQUEST['stu_name'] =="") || ($_REQUEST['stu_email'] =="") || ($_REQUEST['stu_pass']=="") || ($_REQUEST['stu_occ']=="")){
         $msg='<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Please Fill All Feild </div>';
          //       
    }else{
    //assing usewr values to variable
    $stuid = $_REQUEST['stu_id'];
    $stuname = $_REQUEST['stu_name'];
    $stuemail = $_REQUEST['stu_email'];
    $stupassword= $_REQUEST['stu_pass'];
    $stuocc = $_REQUEST['stu_occ'];
    $sql= "UPDATE student_tb SET  stu_name='$stuname',stu_email='$stuemail',stu_pass='$stupassword',stu_occ ='$stuocc'WHERE stu_id='$stuid'";
    // echo $sql;
    // ,c_img='$cimg'
    // 
    if($conn->query($sql)==TRUE){
    $msg='<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Updated Successfully</div>';
    }else{
    $msg='<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">Unable To Submit !</div>';   
    }
}
}
?>
 <div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Add New Student</h3>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="stu_id">ID</label>
            <input type="text" class="form-control" id="stu_id" name="stu_id" value="<?php if(isset($row['stu_id'])){
                echo $row['stu_id'];}?>" readonly>
        </div>
        <div class="form-group">
            <label for="stu_name">Name</label>
            <input type="text" class="form-control" id="stu_name" name="stu_name" value="<?php if(isset($row['stu_name'])){
                echo $row['stu_name'];}?>">
        </div>
        <div class="form-group">
            <label for="stu_email">Email</label>
             <input type="email" class="form-control" id="stu_name" name="stu_email" value="<?php if(isset($row['stu_email'])){
                echo $row['stu_email'];}?>">
        </div>
        <div class="form-group">
            <label for="stu_email">Password</label>
             <input type="password" class="form-control" id="stu_pass" name="stu_pass" value="<?php if(isset($row['stu_pass'])){
                echo $row['stu_pass'];}?>">
        </div>
        <div class="form-group">
            <label for="stu_occ">Occupation</label>
             <input type="text" class="form-control" id="stu_occ" name="stu_occ"
              value="<?php if(isset($row['stu_occ'])){
                echo $row['stu_occ'];}?>">
        </div>
        <div class="text-center">
        <button type="Submit" class="btn btn-success mt-2" id="stuupdatebtn" name="stuupdatebtn">Update</button>
         <a href="student.php" class="btn btn-secondary mt-2">Close</a>
        </div>
    </form>
    <?php
    if(isset($msg)){
         echo $msg;
    };
    ?>
    </div>  
</div>
</div>
<?php
include('../admin/admininclude/footer.php');
?>