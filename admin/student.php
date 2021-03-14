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
<div class="col-sm-9 mt-5">
<!--Table-->
<h2 class="bg-dark text-white p-2" style="text-align:center;">List Of Students</h2>
<?php
$sql= " SELECT * FROM student_tb";
$result=$conn->query($sql);
if($result->num_rows>0){
?>
<table class="table">
<thead >
<tr>
<th scope="col">student ID</th>
<th scope="col">Name</th>
<th scope="col">email</th>
<th scope="col">Action</th>
</tr>
</thead>                                          
<tbody><?php
$count=1;
while($row=$result->fetch_assoc()){
  echo '<tr>'; 
 echo'<td>'.$count.'</td>';
 echo  '<td>'.$row['stu_name'].'</td>';
 echo '<td>'.$row['stu_email'].'</td>';
 echo' <td>';
 echo'<form action="editstudent.php" method="Post" class="d-inline"> 
 <input type="hidden" name="id" value='.$row["stu_id"].'>
<button  type="submit" class="btn btn-info mr-3" name="view" value="view"><i class="fas fa-pen"></i>
</button>
</form>
<form action="" method="Post" class="d-inline"> 
<input type="hidden" name="id" value='.$row["stu_id"].'>
<button  type="submit" class="btn btn-secondary" name="delete" value="delete"><i class="fas fa-trash-alt"></i></button>
</form>
</td>
 </tr>';
 $count++;
}
// here i write a delet method//
if(isset($_REQUEST['delete'])){
$sql ="DELETE FROM student_tb WHERE stu_id={$_REQUEST['id']}";
if($conn->query($sql) ==TRUE){
  echo '<meta http-equiv="refresh" content="0;URL=?deleted"/>';
}else{
  echo "Unable to delete data";
}
}
 ?>
</tbody>
</table>
<?php } else{
  echo "0 results";
} 
?>
</div>
</div>
<!--div row close from header-->
<div>
<a class=" btn btn-danger box" href="./addnewstudent.php"><i class="fas fa-plus fa-2x"></i></a>
</div>
<!--div container-fluid close from header-->


<?php
include('../admin/admininclude/footer.php');
?>