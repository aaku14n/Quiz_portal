<?php  

 $data =new database_inc('idiot');

 if(isset($_POST['roll'])){
 $roll= $_POST['roll'];
 $pass = $_POST['password'];
 $query = "Select * from student where (roll = '$roll' && password='$pass')";
 $result = $data->tf_query($query);
//header('Location: http://www.example.com/');
  $row = $result->num_rows;
 if($row == 0)
 	echo '<center><div class="col-md-6 col-md-offset-3 alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Warning!</strong> Better check yourself, you are not looking too good.
</div></center>';
 else
 	{	$_SESSION['user']=$roll;
 		header('Location: std_profile');}
}



   ?>