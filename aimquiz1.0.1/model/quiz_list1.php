<?php 
$data= new database_inc('idiot');
$query_quiz_list1 = "Select * from `name of quiz` ";
$result_quiz_list1 = $data->r_query($query_quiz_list1);
 
// if(isset($_POST['start_quiz_name']))
// {
// $quiz_start= $_POST['start_quiz_name'];
// 	$query_start_quiz= "UPDATE `name of quiz` SET status='1' where name='$quiz_start'";
// $data->r_query($query_start_quiz);
// echo 'Started';
// }

?>