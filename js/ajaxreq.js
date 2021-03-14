$(document).ready(function(){
//ahax call form already exists email verifaction
$("#stuemail").on("keypress blur",function(){
    var reg= /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    var stuemail=$("#stuemail").val();
    $.ajax({
url:"student/addstudent.php",
method:"POST",
data:{
    checkemail : "checkmail",
    stuemail: stuemail,
},
success:function(data){
    // console.log(data);
    if(data !=0){
     $("#stumsg2").html('<small style="color:red;">Email already exits</small>');
     $("#signup").attr("disabled",true);
    }else if(data==0 && reg.test(stuemail)){
        $("#stumsg2").html('<small style="color:green;">There you go</small>');
        $("#signup").attr("disabled",false);
    }else if(!reg.test(stuemail)){
        $("#stumsg2").html('<small style="color:red;"> Please Enter Valid Email</small>');
        $("#signup").attr("disabled",true);
    }
    if(stuemail==""){
        $("#stumsg2").html('<small style="color:red;"> Please Enter Email</small>');    
    }
},
    });
});
});
function addstu(){
    var reg= /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    var stuname=$("#stuname").val();
    var stuemail=$("#stuemail").val();
    var stupass=$("#stupass").val();
    // console.log(stuname);
    // console.log(stuemail);
    // console.log(stupass);
    if(stuname.trim()==""){
      $("#stumsg1").html('<small style="color:red;">Enter Name</small>');
      $("#stuname").focus();
      return false;  
    }else if(stuemail.trim()==""){
        $("#stumsg2").html('<small style="color:red;">Enter Email</small>');
        $("#stuemail").focus();
        return false; 
    }else if(stuemail.trim()!=""&&!reg.test(stuemail)){
        $("#stumsg2").html('<small style="color:red;"> Please Enter Valid Email e.g. example@gmail.com</small>'); 
        $("#stuemail").focus();
        return false; 
    }
    else if(stupass.trim()==""){
        $("#stumsg3").html('<small style="color:red;">Enter Password</small>');
        $("#stupass").focus();
        return false; 
    }else{
        $.ajax({
            url:'student/addstudent.php',
            method:'POST',
            dataType:"json",
            data:{
                stusignup:"stusignup",
                stuname:stuname,
                stuemail:stuemail,
                stupass:stupass,
            },
            success:function(data){
        console.log(data);
        if(data=="ok"){
            $('#smsg').html("<span class='alert alert-success'>Registation sucessfully</span>");
            clearStuRegField();
        }else if(data=="failed"){
            $('#smsg').html("<span class='alert alert-danger'>Registation Failed</span>");
        }
            },
        });
    }
}
//empty all filed
function clearStuRegField()
{
    $("#sturegform").trigger("reset");
 $("stumsg1").html(" ");
 $("stumsg2").html(" ");
 $("stumsg3").html(" ");  
};
//Ajax call for student login verification
function checkstulogin(){
   // console.log("login clicked");
   var stulogemail=$("#stulogemail").val();
   var stulogpass=$("#stulogpass").val();
$.ajax({
    url:'student/addstudent.php',
    method:'POST',
  //  dataType:"json",
    data:{
        chklogemail:"chklogemail",
        stulogemail:stulogemail,
        stulogpass:stulogpass,
    },
    success:function(data){
        // console.log(data);
 if(data==0){
 $("#logmsg").html('<small class="alert alert-danger"> Please Input Valid Email and Password!</small>'); 
 }
 else if(data==1){
 $("#logmsg").html('<div class="spinner-border text-success" role="status"></div>');
 setTimeout(()=>{ window.location.href="index.php";},1000);
 }
  },
});
}