<?php
if(!isset($_SESSION['user']))
echo 'fuck off with out session model/result';
$data = new database_inc('idiot');

$na=$_SESSION['user'];
$q="UPDATE student SET present='1' where roll='$na'";
$result=$data->tf_query($q);

$name=$_SESSION['user'].'ans';
$q="SELECT * from `name of quiz` where (status='1')";
$re=$data->r_query($q);
$row=mysqli_fetch_array($re);
$qsn=$row['name'];
$i=0;

$query="SELECT * FROM `$name`";
$result=$data->r_query($query);
if($result)    
{
	while($row=mysqli_fetch_array($result))
	{    $a=$row['qno'];
	
	$qu="SELECT * FROM `correct` where (qno='$a')";
	$result1=$data->r_query($qu);
	$row1=mysqli_fetch_array($result1);
	if($row['so']==$row1['co'])
	{  $i++;
	}  
}
	$q="insert into `$na` (testname,marks) VALUES  ('$qsn','$i')";
	$result2=$data->r_query($q);
	//print_r($result2);
	header('location:final_submit');
}
	?>