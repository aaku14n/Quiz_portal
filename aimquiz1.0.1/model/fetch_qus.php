<?php  
$data= new database_inc('idiot');
		$url = isset($_GET['url'])? $_GET['url'] : NULL;
		$url = explode('/',$url);
		 $qus= $url[1];
		$fetch_qus= $qus;
		
/*

fetch question from database

*/
$query ="SELECT * from `name of quiz` where (status='1')";
$result= $data->r_query($query);
$row= mysqli_fetch_array($result);
 $quiz= $row['name'];
$query="SELECT * FROM `$quiz`";
$result= $data->r_query($query);
/*
	total question in quiz
*/	
$total_qus= $result->num_rows;


$query="SELECT * FROM `$quiz` WHERE(id='$fetch_qus')";
$result= $data->r_query($query);
$row= mysqli_fetch_array($result);
 
 /* end of fetch question */

/*

	****select answer from user if already exist

*/
	$roll=$_SESSION["user"].'ans';
	$query_ans="SELECT * FROM `$roll` WHERE (qno='$fetch_qus')";

$result_ans= $data->r_query($query_ans);
	


	if($result_ans)
	{
		$row_ans=mysqli_fetch_array($result_ans);
		$already_ans = $row_ans['so'];
	}
	else
	{
		$already_ans = 0;
	}

/*
 	total solved question
 */
	$query_solved="SELECT * FROM `$roll`";
	$result_solved= $data->r_query($query_solved);
	$solved_qus= $result_solved->num_rows;
 ?>