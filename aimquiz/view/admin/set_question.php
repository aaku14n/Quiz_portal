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
<h2 id="message"></h2>
<br>
<div class="col-md-offset-1 col-md-8">
<form  id="save_question" action="<?php echo URL;?>model/login/save_question"class="form-horizontal">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Question <?php echo $total_qus+1;?>. </label>
    <div class="col-sm-10">
      <textarea class="form-control" name="question" id='sav_question' rows="3"></textarea>
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
      <button  type="submit"  class="btn btn-default">Save And next</button>
    </div>

  </div>
</form>
</div>

          <?php 
         
        if(isset($this->js)){
          echo '<script type="text/javascript">var base_url="'.URL.'";</script><br/>';
          foreach($this->js as $js)
            echo '<script type="text/javascript" src="'.URL.'view/'.$js.'.js"></script><br/>';

        }
?>