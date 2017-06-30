<?php 
class Select_Url{
	function __construct(){
		$url = isset($_GET['url'])? $_GET['url'] : NULL;
		$url = explode('/',$url);
		$this->query_string=$url;
		//print_r($url);
		if(empty($url[0])){
		
			require "controller/index.php";
			$online =new Index();
			$online->_home();
			return false;
		}
		else
			if($url[0]=='std_profile')
			{
				require 'controller/index.php';
				$loggedIn = new Index();
				$loggedIn->_profile();
			}
			else if($url[0]=='exam' && isset($_SESSION['user']))
			{
				require 'controller/index.php';
				$exam = new Index();
				
				$exam->_exam();
			}
			elseif ($url[0]=='final_submit' AND (isset($_SESSION['user']))) {
				require 'controller/index.php';
				$result = new Index();
				$result->_result();
			}
			elseif ($url[0]=='user_submit') {
				require 'controller/index.php';
				$user_submit = new Index();
				$user_submit->_user_submit();

			}
			elseif ($url[0]=='aim_admin' AND empty($url['1'])){
				$this->file= 'controller/'.$url[0].'.php';
				require $this->file;
				$aim_admin= new $url[0];
				$aim_admin->Index();
			}
			elseif ($url[0]=='aim_admin' AND $url['1']=='set_question') {

				// require 'controller/index.php';
				// $set_question = new Index();
				echo 'set_quiz';
				// $set_question->_set_question();
			}

				if($this->query_string[0] == 'model' ){
					if(!empty($this->query_string[1])){
						$this->file= 'controller/'.$this->query_string[1].'.php';
						require $this->file;
						$controller=new $this->query_string[1];
						$controller->load_model($this->query_string[1]);
						$controller->{$this->query_string[2]}();
						return false;
		}
		
	
	}


	}
}

 
 ?>