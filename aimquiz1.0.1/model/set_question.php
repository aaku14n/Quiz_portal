<?php 
// Select quiz name from database
//include( 'lib/database.inc.php');
 $data = new database_inc('idiot');
 $query = 'Select * from `name of quiz` ORDER BY `id` DESC';
$result=$data->tf_query($query);
$row = mysqli_fetch_array($result);
 $quiz = $row['name'];

// Inset question in database
if(isset($_POST['question']))
{
	$question= mysql_real_escape_string($_POST['question']);
	$option1 = mysql_real_escape_string($_POST['option1']);
	$option2 = mysql_real_escape_string($_POST['option2']);
	 $option3 = mysql_real_escape_string($_POST['option3']);
	$option4 = mysql_real_escape_string($_POST['option4']);
$query="SELECT * FROM `$quiz` WHERE(question='$question')";
$result = $data->r_query($query);


if(!mysqli_num_rows($result))
{ 
$query= "INSERT INTO `$quiz`( `question`, `op1`, `op2`, `op3`, `op4`) VALUES ('$question','$option1','$option2','$option3','$option4')";


$result=$data->tf_query($query);
echo '<br><center><div class="col-md-4 col-md-offset-3"><div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Question ! Successfully inserted  in database.</strong> .
</div></div></center>';
}
}



// Select number of question from the quiz table 
$query = "Select * from $quiz";
$result= $data->tf_query($query);
$total_qus = mysqli_num_rows($result);
//echo $total_qus;

 ?>