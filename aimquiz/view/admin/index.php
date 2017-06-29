
<!-- 
  View admin access page to admin 
 -->


<div id="link" class="col-md-offset-3">
  <div class="container">
  <h1>Welcome to Admin panel
  </h1>
  <small>Here you can costomise your Settings</small>
  </div>
</div>



<!-- 

code for the insert answer in database 


 -->


<!--  End of view admin access page -->


<?php 
        if(isset($this->js)){
          echo '<script type="text/javascript">var base_url="'.URL.'";</script>';
          foreach($this->js as $js)
            echo '<script type="text/javascript" src="'.URL.'view/'.$js.'.js"></script>';

        }
?>