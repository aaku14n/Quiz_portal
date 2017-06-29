<div class="col-md-offset-3">
  <center id="message"></center>
  <div class="container ">
    <br><br>
    <h1>Please Inset name of quiz and time</h1>
    <div class="col-md-6">
  <form id="set_quiz" action="<?php echo URL;?>model/login/set_quiz"
    class="form-horizontal">
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Quiz Title</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name='quiz' id="inputEmail3" placeholder="Title">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword3" name='title' class="col-sm-2 control-label">Time(in min)</label>
      <div class="col-sm-10">
        <input type="number" min=0 class="form-control" id="inputPassword3" placeholder="Time Duration">
      </div>
    </div>
   
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Save and Start</button>
      </div>
    </div>
  </form>
  </div>

  </div>

</div>