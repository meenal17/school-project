             ///ajax call for admin login here ///

function checkadminlogin(){
    //console.log("button clicked");
    // console.log("login clicked");
    var adminlogemail=$("#adminlogemail").val();
    var adminlogpass=$("#adminlogpass").val();
 $.ajax({
     url:'admin/admin.php',
     method:'POST',
   //  dataType:"json",
     data:{
         chklogemail:"chklogemail",
         adminlogemail:adminlogemail,
         adminlogpass:adminlogpass,
     },
     success:function(data){
         // console.log(data);
  if(data==0){
  $("#adminlogmsg").html('<small class="alert alert-danger"> Please Input Valid Email and Password!</small>'); 
  }
  else if(data==1){
  $("#adminlogmsg").html('<div class="alert alert-success">login sucessfully </div>');
  setTimeout(()=>{ window.location.href="admin/admindashboard.php";},1000);
  }
   },
 });
}