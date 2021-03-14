<!--start footer-->
<footer class="container-fluid bg-dark text-center p-2">
	<small class="text-white"> Copyright&copy; 2020 || Designed by Meenal Vishu || <a href="#login"data-toggle="modal" data-target="#adminloginmodalcenter">AdminLogIn</a></small>
</footer>	
<!--End footer-->
<!--start student registation-->
<!-- Modal -->
<div class="modal fade" id="sturegmodalcenter" tabindex="-1" aria-labelledby="sturegmodalcenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="sturegmodalcenterLable">Student Registration</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <!---Start student registration form--->
       <?php
       include('studentregstation.php');
       ?>
      <!---end student registration form--->
      </div>
      <div class="modal-footer">
      <span id="smsg"></span>
      <button type="button" class="btn btn-success"onclick="addstu();" id="signup">Sign Up</button>
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!---START student login--->
<div class="modal fade" id="stuloginmodalcenter" tabindex="-1" aria-labelledby="stuloginmodalcenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="stuloginmodalcenterLabel">Student LogIn</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <!---Start student login form--->
      <form id="stuloginform">
  <div class="form-group">
  <i class="fas fa-envelope"></i><label for="stuemail" class="pal-2 font-weight-bold">Email</label><input type="email"class="form-control" placeholder="email" name="stulogemail" id="stulogemail">
  </div>
        <div class="form-group">
          <i class="fas fa-key"></i><label for="stupass" class="pal-2 font-weight-bold">Password</label><input type="password"class="form-control" placeholder="Name" name="stulogpass" id="stulogpass">
        </div>
        <!---end login form--->
</form>
      </div>
      <div class="modal-footer">
      <small id="logmsg"></small>
      <button type="button" class="btn btn-success" id="stuloginbtn" onclick=" checkstulogin()">LogIn</button>
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancle</button>
      </div>
    </div>
  </div>
</div>
        <!---end stu login form--->
<!--end student registation-->

<!---START Admin login--->
<div class="modal fade" id="adminloginmodalcenter" tabindex="-1" aria-labelledby="adminloginmodalcenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="adminloginmodalcenterLabel">Admin LogIn</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <!---Start admin login form--->
      <form id="adminloginform">
  <div class="form-group">
  <i class="fas fa-envelope"></i><label for="adminemail" class="pal-2 font-weight-bold">Email</label><input type="email"class="form-control" placeholder="email" name="adminlogemail" id="adminlogemail">
  </div>
        <div class="form-group">
          <i class="fas fa-key"></i><label for="stupass" class="pal-2 font-weight-bold">Password</label><input type="password"class="form-control" placeholder="Name" name="adminlogpass" id="adminlogpass">
        </div>
        <!---end login form--->
</form>
      </div>
      <div class="modal-footer">
      <small id="adminlogmsg"></small>
      <button type="button" class="btn btn-success" id="adminloginbtn" onclick="checkadminlogin()">LogIn</button>
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancle</button>
      </div>
    </div>
  </div>
</div>
        <!---end Admin login form--->
	<!-- js link s -->
<script src="js/jquery.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/all.js"></script>
<!--student ajax call javascript-->
<script type="text/javascript" src="js/ajaxreq.js"></script>
<!--admin ajax call javascript-->
<script type="text/javascript" src="js/adminajax.js"></script>
</body>
</html>