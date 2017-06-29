<?php 
 require 'model/student_sign.php';?>
<div class="jumbotron">
    <div class="container">
    	<div class="col-sm-7 col-md-7">
    	<h1>Welcome</h1>
    	<p> Aim quizes for the online test in the series</p>
this is aakarsh yadav name </div>
<div class="col-sm-5 col-md-5">
	
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">New Student Registration</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name">
  </div>
    <div class="form-group">
   
    <input type="number" class="form-control" id="exampleInputPassword1" min="1111111111"max="9999999999" placeholder="Roll Number">
  </div>  <div class="form-group">
   
    <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email">
  </div>  <div class="form-group">
   
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>  &nbsp <button type="reset" class="btn btn-default">Reset</button>
</form>
	</div>
    </div>
    <div class="container">



<!-- Button trigger modal -->
<center> <p>Or<br>Just please sign in</p>
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  here
</button>
</center>

<!-- Modal -->
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Sign In</h4>
      </div>
      <div class="modal-body">
        
<!--Sign in form for the students-->
        <form action="" method="post" class="form-horizontal" id="studentsignin">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" name='roll'id="roll" placeholder="Roll Number">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name='password' id="password" placeholder="Password">
    </div>
  </div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <input type='submit' class="btn btn-default" onclick="document.getElementById('studentsignin').submit();"value='Sign in'/>
  
    </div>
  </div>
</form>
<!-- End of the studnets sign in form -->
      </div>
      
    </div>
  </div>
</div>

    </div >

</div>

<div class="container">
			<span class="glyphicon glyphicon-star" aria-hidden="true"></span>


	</div>



<h1 id="time"></h1>
<fieldset id="mainloginarea">
<legend>Login Area</legend>
<form action="authadm.php" name="homesignin" method="post">


<fieldset id="adminlogin">

<legend style="font-size:30px;"> Admin Login</legend>
<input type="text"  id="log1" size="20px" name="admin" placeholder="   Username"><br><br>
<input type="password"  id="log1" size="20px" name="password" placeholder="   ********"><br><br>
<input type="submit" id="homesubmit" value="Login" name="submit" style="box-shadow:0px 0px 5px; margin-left:150px;width:100px;">

</fieldset>
</form>
<form action="stulogin.php" name="homesignin" method="post">

<fieldset id="userlogin">
<legend style="font-size:30px;"> Student Login</legend>
<input type="text"  id="log1" name="rlnm" size="20px" placeholder="   Roll Number"><br><br>
<input type="password"  id="log1" size="20px" name="pwd" placeholder="   ********"><br><br>
<input type="submit" id="submit" value="Login" name="submit" style="box-shadow:0px 0px 5px; margin-left:150px;width:100px;">
</fieldset>

</form>
</fieldset>
<div id="signb">
<form action="register.php" name="regist" method="post"><br><br><br>
<font size="5">If new to this zone click <b><font color="blue">Register</font></b> button</font>
<input type="submit" id="signu" value="Register" name="signup" style="box-shadow:0px 0px 5px; margin-top:2px">
</form>

</div>
<script src="public/js/student_sign.js" type="text/javascript">


</script>