<?php
include('../admin/admininclude/header.php');
include('../dbconn.php');

// Fetch data
 
    if(isset($_REQUEST['view']) &&isset($_REQUEST['id'])){
    $sql= "SELECT * FROM course WHERE c_id={$_REQUEST['id']}";
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();
    }
    
//update
if(isset($_REQUEST['updatebtn']) && $_REQUEST['c_id']){
    if(($_REQUEST['c_id']== "") || ($_REQUEST['c_name'] =="") || ($_REQUEST['c_desc'] =="") || ($_REQUEST['c_author']=="") || ($_REQUEST['c_duration']=="") || ($_REQUEST['c_price'] =="") || ($_REQUEST['c_org_price'] == "") || $_FILES['c_img']['name'] == ""){
         $msg='<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Please Fill All Feild </div>';
          //       
    }else{
    //assing usewr values to variable
    $cid = $_REQUEST['c_id'];
    $cname = $_REQUEST['c_name'];
    $cdesc = $_REQUEST['c_desc'];
    $cauthor= $_REQUEST['c_author'];
    $cduratio = $_REQUEST['c_duration'];
    $cprice = $_REQUEST['c_price'];
    $corgprice = $_REQUEST['c_org_price'];
    $cimg = '../image/courseimages/'.$_FILES['c_img']['name'];

    $sql= "UPDATE course SET  c_name='$cname',c_desc='$cdesc',c_author='$cauthor',c_duration ='$cduratio',c_price=$cprice,c_org_price=$corgprice,c_img='$cimg' WHERE c_id=$cid";
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
<!--here i write code for veiw button means edit button-->
<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Edit New Courses</h3>
   
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="c_id">Course ID</label>
            <input type="text" class="form-control" id="c_id" name="c_id" value="<?php if(isset($row['c_id'])){ echo $row['c_id'];}?>" readonly>
        </div>

        <div class="form-group">
            <label for="c_name">Course Name</label>
            <input type="text" class="form-control" id="c_name" name="c_name" value="<?php if(isset($row['c_name'])){ echo $row['c_name'];}?>">
        </div>

       <div class="form-group">
            <label for="c_desc">Course Description</label>
           <textarea class="form-control" id="c_desc" name="c_desc" row=2><?php if(isset($row['c_desc'])){ echo $row['c_desc'];}?></textarea>
        </div>

        <div class="form-group">
            <label for="c_author">Author</label>
            <input type="text" class="form-control" id="c_author" name="c_author" value="<?php if(isset($row['c_author'])){ echo $row['c_author'];}?>">
        </div>
        <div class="form-group">
          <label for="c_duration">Duration</label>
          <input type="text" class="form-control" id="c_duration" name="c_duration" value="<?php if(isset($row['c_duration'])){ echo $row['c_duration'];}?>">
        </div>
        <div class="form-group">
            <label for="c_price">Course Price</label>
            <input type="text" class="form-control" id="c_price" name="c_price" value="<?php if(isset($row['c_price'])){ echo $row['c_price'];}?>">
        </div>
        <div class="form-group">
            <label for="c_org_price">Course Original Price</label>
            <input type="text" class="form-control" id="c_org_price" name="c_org_price" value="<?php if(isset($row['c_org_price'])){ echo $row['c_org_price'];}?>">
        </div>
        <div class="form-group">
            <label for="c_img">Image</label>
            <img src="<?php if(isset($row['c_img'])){ echo $row['c_img'];}?>" alt="" class="img-thumbnail">
            <input type="file" class="form-control-file" id="c_img" name="c_img">
        </div>
        <div class="text-center">
            <button type="Submit" class="btn btn-success mt-2" id="updatebtn" name="updatebtn">Update</button>
            <a href="courses.php" class="btn btn-secondary mt-2">Close</a>
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