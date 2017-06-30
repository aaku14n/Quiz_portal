<script>
if(0)
{<?php 
// require file for fatcing already inserted question in the quiz
require 'model/set_question.php';
echo 'sfhgsdjf';
?>
}
</script>
<br><br>
<div class="col-md-offset-1 col-md-8">
<form  class="form-horizontal">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Question <?php echo $total_qus+1;?>. </label>
    <div class="col-sm-10">
      <textarea class="form-control" name="question" id='question' rows="3"></textarea>
    </div>
  </div>
    <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">A .</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="option1" id='option1'placeholder="Option A">
    </div>
  </div>
    <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">B .</label>
    <div class="col-sm-5">
   <input type="text" class="form-control" name="option2" id='option2'placeholder="Option B">
    </div>
  </div>
    <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">C .</label>
    <div class="col-sm-5">
   <input type="text" class="form-control" name="option3" id='option3' placeholder="Option C">
    </div>
  </div>
    <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">D .</label>
    <div class="col-sm-5">
   <input type="text" class="form-control" name="option4" id='option4' placeholder="Option D">
    </div>
  </div>


  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button  onclick="save_question()" class="btn btn-default">Save And next</button>
    </div>

  </div>
</form>
</div>
<script>
function save_question(){
  var question = document.getElementById('question').value;
  var option1 = document.getElementById('option1').value;
  var option2 = document.getElementById('option2').value;
  var option3 = document.getElementById('option3').value;
  var option4 = document.getElementById('option4').value;
  var string = 'question='+question+'&option1='+option1+'&option2='+option2+'&option3='+option3+'&option4='+option4+'';
  console.log(string);
          $.ajax({
            type:'POST',
            url:'http://localhost/aimquiz/model/set_question.php',
            data:string,
            chache:false,
            success : function(result){
              alert(result);
            }
          });
}
</script>