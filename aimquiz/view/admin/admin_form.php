<div class='container'>
  <div class='col-md-4 col-md-offset-3'>
    <form id="submitform"action="<?php echo URL;?>model/login/do_login">
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="admin" placeholder="Email">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password"placeholder="Password">
      </div>
      <button type="submit" id="submitadmin" class="btn btn-default">Submit</button>
    </form>
  </div>
</div>