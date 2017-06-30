<?php 
class Index extends controller{
	function __construct() {
		parent::__construct();
		
	}
	function _home(){
		$this->view->render('index/index');
	}
	function _profile()
	{
		$this->view->render('student/index');
	}
	function _exam()
	{
		$this->view->render('exam/index');
	}
	function _result()
	{
		$this->view->render('result/index');
	}
	function _user_submit()
	{
		$this->view->render_model('result');
	}
	function _admin()
	{
		$this->view->render_admin('admin/index');
	}
	function _set_question()
	{
		$this->view->render_admin('admin/set_question');
	}
	
}
?>