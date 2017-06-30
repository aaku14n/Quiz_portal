<?php 

		require 'model/save_answer.php';
		require 'model/fetch_qus.php';
?>
<center>
<nav aria-label="...">
  <ul class="pagination">
  	<?php 
  	$prev= $qus-1;
  	$next = $qus+1;
  	
  	for($i=1;$i<=$total_qus;$i++)
  		if($i==$qus)
  	 echo '<li class="active"><a href="'.URL.'exam/'.$i.'">'.$i.' <span class="sr-only">(current)</span></a></li>';
  	else 
  		echo  '<li class=""><a href="'.URL.'exam/'.$i.'">'.$i.' <span class="sr-only">(current)</span></a></li>';
  	?>
  </ul>
</nav></center>	
<div class='container'>


<div class="panel panel-info">
  <div class="panel-heading"><?php 

	echo "<div class='row'><div class='col-md-1'><b>Qus ".$qus.".</b></div><div class='col-md-10'>
	 ".$row['question']."</div>";
	
	echo '</div></div>
  <div class="panel-body "><div class="row">
  <div class="col-md-offset-1">
    '; echo '<form  action="" method="post" name="set_answer">';
	echo '<input type="hidden" value="'.$row['id'].'"  id="qno" name="qno">';
	echo 'A.<input type="radio" id="op1" value="1" name="ans" ';if($already_ans == 1) echo 'checked';echo '>'.$row['op1'].'<br>';
	echo 'B.<input type="radio" id="op2" value="2" name="ans" ';if($already_ans == 2) echo 'checked';echo '>'.$row['op2'].'<br>';
	echo 'C.<input type="radio" id="op3" value="3" name="ans" ';if($already_ans == 3) echo 'checked';echo '>'.$row['op3'].'<br>';
	echo 'D.<input type="radio" id="op4" value="4" name="ans" ';if($already_ans == 4) echo 'checked';echo '>'.$row['op4'].'<br>';

	if($prev!=0)
	echo '<a href="'.URL.'exam/'.$prev.'"><input type="button" class="btn btn-default" value="<<" id="su"></a>';
	else 
	echo '<input type="button" class="btn btn-default disabled" value="<<" id="su">';
	echo '&nbsp;<input type="submit" class="btn btn-success btn-lg"  value="Save" id="su">&nbsp;';
	if($next<$i)
	echo '<a href="'.URL.'exam/'.$next.'" ><input type="button" class="btn btn-default" value=">>" id="su"></a>';
else
	echo '<input type="button" class="btn btn-default disabled" value=">>" id="su">';
echo '</form></div></div>';?>
  </div>
  <?php 

  	if ( $qus == $total_qus)  
  	{
  		echo '<center><a href="'.URL.'user_submit"><button type="button" class="btn btn-danger " >Final submit</button></a></center><br>';
  	}
  	?>
  
</div>

</div>

<!-- 

prograss bar for the students


 -->
 <?php 
      $progress= ($solved_qus * 100)/$total_qus;
 ?>
<div class="container">
<div class="progress">
  <div class="progress-bar <?php 
  if($progress<33)
  	echo 'progress-bar-danger';
  if(33 <= $progress AND $progress <=50)
  	echo 'progress-bar-warning';
  if(50<$progress AND $progress<80)
  	echo 'progress-bar-info';
  else
  	echo 'progress-bar-success';?>" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="min-width: <?php echo $progress;?>em;">
    <?php echo $progress;?>%
  </div>
</div>
</div>


