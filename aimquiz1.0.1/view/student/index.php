<?php 
 if(!isset($_SESSION['user']))
 header('location: fuckoff');
?>
<div class='conatiner'>
<div class='col-sm-6 col-md-6 col-lg-6 col-md-offset-3'>

<div class="panel panel-default">
  <div class="panel-body">
    
<table class="table table-hover">
	<th>Student Info</th>
 <tr><td>Name</td><td>aaku Yadav</td></tr>
  <tr><td>Roll</td><td>1318710001</td></tr>
   <tr><td>Email</td><td>akarshgdps@gmail.com</td></tr> 
  <tr><td>Branch</td><td>CSE</td></tr>
</table>


<a href="exam/1" style="text-decoration:none;"><button  class='btn btn-success'>Start Exam</button>
</a><button class='btn btn-danger'>Log Out</button>
<button class='btn btn-primary'>Edit Info</button>
  </div>
</div>


</div>
</div>


