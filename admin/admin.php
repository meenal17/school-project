<?php
if(!isset($_SESSION)){
    session_start();
}
include_once('../dbconn.php');
if(!isset($_SESSION['is_admin_login'])){
if(isset($_POST['chklogemail']) && isset($_POST['adminlogemail']) && isset($_POST['adminlogpass'])){
$adminlogemail=$_POST['adminlogemail'];
$adminlogpass=$_POST['adminlogpass'];
$sql="SELECT admin_email,admin_pass FROM admin WHERE admin_email='".$adminlogemail."' 
AND admin_pass='".$adminlogpass."'";
 $result = $conn->query($sql);
 $row= $result->num_rows;
 if($row === 1){
echo json_encode($row);
//here i create a session to save data on browser 
$_SESSION['is_admin_login']= true;
$_SESSION['adminlogemail']=$adminlogemail;
 }else if($row===0){
 echo json_encode($row); 
}
}
}
?>