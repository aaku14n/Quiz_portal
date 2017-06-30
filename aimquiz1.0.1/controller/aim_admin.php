<?php 
/**
 * 
 */
 class aim_admin extends controller
 {	
 	
 	
 	public function __construct()
 		{
 		parent::__construct();
$this->view->js = array('admin/assets/js/set_question','admin/assets/js/fetch_quiz');
 		}

 	

 	function Index(){

 		Session::init();
 		$logged= Session::get("user");
 		
 		if($logged){
 			$this->view->render_logged_admin('admin/index');

 			}
 		else{
 			$this->view->render_admin('admin/admin_form');
 		}

 	}
 } ?>