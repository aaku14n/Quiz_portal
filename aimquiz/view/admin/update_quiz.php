<div  class="">
<div class="container">
<h2 class="col-md-offset-2">Insert Questions</h2>


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
</div>
</div>