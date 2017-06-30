
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

<div id="link1" class="col-md-offset-3">
<?php require 'sub_div/div_link1.php';?>
</div>
<!-- 

code for thw start quiz link


 -->
 <div id="link2" class="">
<?php require 'sub_div/div_link2.php';?>

</div>
<!-- 
code for the uodate quiz question


 -->
<div id="link3" class="">
<div class="container">
<h2 class="col-md-offset-2">Insert Questions</h2>


<?php require 'set_question.php';?>
</div>
</div>
<!-- 

code for the insert answer in database 


 -->

 <div id="link4" class="">
<?php require 'sub_div/div_link4.php';

?>

</div>
<!--  End of view admin access page -->

<script type="text/javascript">
function view_click(div_link)
{  document.getElementById('link').style.display='none';
  document.getElementById('link1').style.display='none';
  document.getElementById('link2').style.display='none';
  document.getElementById('link3').style.display='none';
   document.getElementById('link4').style.display='none';
  // document.getElementById('link5').style.display='none';
  // document.getElementById('link6').style.display='none';
  // document.getElementById('link7').style.display='none';
  



  if(div_link == 0)
    document.getElementById('link').style.display='block';
  if (div_link==1)
  document.getElementById('link1').style.display='block';
  if (div_link==2)
  document.getElementById('link2').style.display='block';
if (div_link==3)
  document.getElementById('link3').style.display='block';
 if (div_link==4)
   document.getElementById('link4').style.display='block';
// if (div_link==5)
//   document.getElementById('link5').style.display='block';
// if (div_link==6)
//   document.getElementById('link6').style.display='block';
// if (div_link==7)
//   document.getElementById('link7').style.display='block';


}



</script>
<?php 
        if(isset($this->js)){
          echo '<script type="text/javascript">var base_url="'.URL.'";</script>';
          foreach($this->js as $js)
            echo '<script type="text/javascript" src="'.URL.'view/'.$js.'.js"></script>';

        }
?>