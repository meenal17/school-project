<?php
include('../admin/admininclude/header.php');
include('../dbconn.php');
?>

<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Edit New Courses</h3>
    <?php
    if(isset($_REQUEST['view'])){
    $sql="SELECT*FROM course WHERE c_id={$_REQUEST['id']}";
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();
    }
    ?>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="c_name">Course Name</label>
            <input type="text" class="form-control" id="c_name" name="c_name" value="<?php if(isset($row['c_name'])){ echo $row['c_name'];}?>">
        </div>
        <div class="form-group">
            <label for="c_desc">Course Description</label>
            <textarea class="form-control" id="c_desc" name="c_desc" row=2 > <?php if(isset($row['c_desc
            '])){ echo $row['c_desc'];}?>"</textarea>
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