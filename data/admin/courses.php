<?php
include('../admin/admininclude/header.php');
include('../dbconn.php');
?>
<div class="col-sm-9 mt-5">
<!--Table-->
<h2 class="bg-dark text-white p-2" style="text-align:center;">List Of Coureses</h2>
<?php
$sql="SELECT*FROM course";
$result=$conn->query($sql);
if($result->num_rows>0){
?>
<table class="table">
<thead >
<tr>
<th scope="col"> Course ID</th>
<th scope="col">Name</th>
<th scope="col">Author</th>
<th scope="col">Action</th>
</tr>
</thead>                                          
<tbody><?php
while($row=$result->fetch_assoc()){
  echo '<tr>'; 
 echo '<th scope="row">'.$row['c_id'].'</th>';
 echo  '<td>'.$row['c_name'].'</td>';
 echo '<td>'.$row['c_author'].'</td>';
 echo' <td>';
 echo'
 <form action="editcourse.php" method="Post" class="d-inline"> 
 <input type="hidden" name="id" value='.$row["c_id"].'>
<button  type="submit" class="btn btn-warning mr-3" name="view" value="view"><i class="fas fa-pen"></i>
</button>
</form>


<form action="" method="Post" class="d-inline"> 
<input type="hidden" name="id" value='.$row["c_id"].'>
<button  type="submit" class="btn btn-secondary" name="delete" value="delete"><i class="fas fa-trash-alt"></i></button>
</form>
</td>
 </tr>';
}
// here i write a delet method//
if(isset($_REQUEST['delete'])){
$sql ="DELETE FROM course WHERE c_id={$_REQUEST['id']}";
if($conn->query($sql)==TRUE){
  echo '<meta http-equiv="refresh" content="0;URL=?deleted"/>';
}else{
  echo "Unable to delete data";
}
}


 ?>
</tbody>
</table>
<?php }else{
  echo "0 results";
} 
?>
</div>
</div>
<!--div row close from header-->
<div>
<a class=" btn btn-danger box" href="./addcourse.php"><i class="fas fa-plus fa-2x"></i></a>
</div>
<!--div container-fluid close from header-->


<?php
include('../admin/admininclude/footer.php');
?>