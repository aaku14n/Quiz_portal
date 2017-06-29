<?php 
 
  class View{
    public $js;
  function __construct(){

  }
  public function render($name){
//echo 'comes in view';
  require 'view/header.php';
  require 'view/'.$name.'.php';
  require 'view/footer.php';
  }
  public function render_model($name)
  {
    require 'model/'.$name.'.php';
  }
  public function render_logged_admin($name,$noIncludes){
    if($noIncludes==true)
    {
      require 'view/'.$name.'.php';
    }
    else{
          require 'view/header.php';
          require 'view/side_bar.php';
          require 'view/'.$name.'.php';
          require 'view/footer.php';
    }


  }
  public function render_admin($name){
    require 'view/header.php';
    require 'view/'.$name.'.php';
    require 'view/footer.php';
  }

  }
  ?>