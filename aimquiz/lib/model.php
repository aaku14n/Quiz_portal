<?php

	/**
	* 
	*/
	class Models 
	{
		public $database;
		
		function __construct()
		{
			# code...
			// echo "this is your models<br/>";
			// echo "<script>alert('what the heck');</script>";
			
			$this->database=new database_inc('idiot');
		
		}
	
	}