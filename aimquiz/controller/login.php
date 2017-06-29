<?php
class login extends controller{
		function __construct(){
			parent::__construct();
			// if(Session::get('admin')!='1')
			// 	header("location:URL");
		}
		function do_login(){

		$this->model->do_login();

		}
		function set_quiz(){
			$this->model->set_quiz();
		}
		function save_question(){
			$this->model->save_question();
		}
}
?>