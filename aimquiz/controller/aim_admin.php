<?php 
/**
 * 
 */
 class aim_admin extends controller
 {	
 	
 	
 	public function __construct()
 		{
 		parent::__construct();
 		Session::init();
 		$logged= Session::get("user");
 		
 		if($logged==false){
 			$this->view->render_admin('admin/admin_form');

 			}
 		

$this->view->js = array('admin/assets/js/set_question','admin/assets/js/save_question');
 		}

 	
 	function Index(){
 		$this->view->render_logged_admin('admin/index',0);
 	}
 	function set_question(){
 		$this->view->render_logged_admin('admin/set_question',0);
 		
 	}
 	function setup_quiz(){
 		$this->view->render_logged_admin('admin/setup_quiz',0);
 	}
 	function start_quiz(){
 		$this->view->render_logged_admin('admin/start_quiz',0);
 	}
 	function update_quiz(){
 		$this->view->render_logged_admin('admin/update_quiz',0);
 	}
 	function insert_answer(){
 		$this->view->render_logged_admin('admin/insert_answer',0);
 	}

 } ?>