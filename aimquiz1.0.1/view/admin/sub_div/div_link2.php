<div class="container"> 
 <div class="col-md-6 col-md-offset-2">
  <h2>Please select quiz for start</h2>

 <form role="form-group" action="" method="post">
  <div class="form-group">
<label for="sel1"class="control-label">Quiz Name</label>
<select class="col-sm-4 form-control" id="sel1" name="insert_answer">
<?php 
print_r($result_quiz_list);
while($row_quiz_name=mysqli_fetch_array($result_quiz_list))
{ 
  echo '<option>'.$row_quiz_name["name"].'</option>';
}
echo $row_quiz_name["name"];
?>
</select>
</div><br><br>
 <div class="form-group">
    <div class=" col-sm-10">
<input type="submit" class="btn btn-success" value="Select quiz"/>
</div>
</div></form>

 </div>
</div>