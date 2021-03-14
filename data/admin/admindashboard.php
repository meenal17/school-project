<?php
include('../admin/admininclude/header.php');
?>
   <div class="col-sm-9 mt-5">
    <div class="row mx-5 text-center">
      <div class="col-sm-4 mt-5">
        <div class="card text-white bg-danger mb-3" style="max-width:18rem;">
        <div class="card-header">Courses</div>
        <div class="Card-body">
<h4 class="card-title">5</h4>
<a href="#" class="btn text-white">View</a>
        </div>
      </div>
      </div>
      <div class="col-sm-4 mt-5">
        <div class="card text-white bg-success mb-3" style="max-width:18rem;">
        <div class="card-header">Student</div>
        <div class="Card-body">
<h4 class="card-title">250</h4>
<a href="#" class="btn text-white">View</a>
        </div>
      </div>
      </div>
      <div class="col-sm-4 mt-5">
        <div class="card text-white bg-warning mb-3" style="max-width:18rem;">
        <div class="card-header">Solid</div>
        <div class="Card-body">
<h4 class="card-title">60</h4>
<a href="#" class="btn text-white">View</a>
        </div>
      </div>
      </div>
    </div>
    <div class="mx-5 mt-5 text-center">
      <!--Table-->
      <p class="bg-dark text-white p-2">Courese Order</p>
      <table class="table">
      <thead>
<tr>
  <th scope="col">Order ID</th>
  <th scope="col">Course ID</th>
  <th scope="col">Student Email</th>
  <th scope="col">Order Date</th>
  <th scope="col">Amount</th>
  <th scope="col">Action</th>
</tr>
   </thead>
   <tbody>
     <tr>
       <th scope="row">22</th>
       <td>100</td>
       <td>sonam@gmail.com</td>
       <td>20/10/2020</td>
       <td>2000</td>
       <td> <button  type="submit" class="btn btn-secondary" name="delete" value="delete"><i class="fas fa-trash-alt"></i></button></td>
     </tr>
   </tbody>
   </table>
    </div>
   </div>
 </div>
 </div> 
</body>
<?php
include('../admin/admininclude/footer.php');
?>