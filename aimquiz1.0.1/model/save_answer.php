<?php 

if(isset($_POST['qno']))
{ $data= new database_inc('idiot');
 	$answer=$_POST['ans'];
	 $qno=$_POST['qno'];

 	$roll=$_SESSION["user"].'ans';
	$rl=$_SESSION['user'];
	$query="SELECT * FROM `$roll` WHERE (qno='$qno')";
	
	$result= $data->r_query($query);
 	
	if($result->num_rows !=0)
	{
					$qu1="UPDATE `$roll` SET so=$answer WHERE(qno='$qno') LIMIT 1";
					$data->r_query($qu1);
					$already_ans = $answer;
	}
	else
	{
		
				$query="INSERT INTO `$roll` (qno,so) VALUES($qno,$answer)";
				$data->r_query($query);
				$already_ans = $answer;
	}

}

?>