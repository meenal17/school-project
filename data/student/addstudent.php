<?php
if(!isset($_SESSION)){
    session_start();
}
include_once('../dbconn.php');
//checking email aleready registerd
if(isset($_POST['checkemail']) && isset($_POST['stuemail'])){
    $stuemail=$_POST['stuemail'];
    $sql="SELECT stu_email FROM student_tb WHERE stu_email='".$stuemail."'";
    $result=$conn->query($sql);
    $row=$result->num_rows;
    echo json_encode($row);
}
//insert data into database
if(isset($_POST['stusignup'])&& isset($_POST['stuname'])&& isset($_POST['stuemail'])&& isset($_POST['stupass'])){
    $stuname=$_POST['stuname'];
    $stuemail=$_POST['stuemail'];
    $stupass=$_POST['stupass'];
    $sql="INSERT INTO student_tb(stu_name,stu_email,stu_pass)VALUES('$stuname','$stuemail','$stupass')";
    if($conn->query($sql)==TRUE){
        echo json_encode("ok");
    }
    else{
        echo json_encode("failed");
    }
}
//  student login verification
if(!isset($_SESSION['is_login'])){
if(isset($_POST['chklogemail']) && isset($_POST['stulogemail']) && isset($_POST['stulogpass'])){
$stulogemail=$_POST['stulogemail'];
$stulogpass=$_POST['stulogpass'];
$sql="SELECT stu_email,stu_pass FROM student_tb WHERE stu_email='".$stulogemail."' 
AND stu_pass='".$stulogpass."'";
 $result = $conn->query($sql);
 $row= $result->num_rows;
 if($row==1){
echo json_encode($row);
//here i create a session to save data on browser 
$_SESSION['is_login']= true;
$_SESSION['stulogemail']=$stulogemail;
 }else if($row===0){
 echo json_encode($row); 
}
}
}
?>