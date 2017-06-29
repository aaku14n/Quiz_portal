<?php 
class controller{
		public $view;	
		public $model;
	function __construct(){
		//echo 'comes in controller';
	$this->view = new View();
	}
	public function load_model($model){
		if(file_exists('model/login/'.$model.'.php')){
			require 'model/login/'.$model.'.php';
			$modelselect= $model.'_model';
			$this->model= new $modelselect();


		}



	}
	
}?>