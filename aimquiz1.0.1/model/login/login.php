<?php 
	/**
	* 
	*/
	class login_model extends Models
	{
		
		public function __construct()
		{
			parent::__construct();
			
		}

		public function do_login(){
			$admin= $_POST['admin'];
			$password= $_POST['password'];
			if($admin== 'admin' AND $password=='aaloo')
			{
				Session::init();
				Session::set("user",1);
				$data=true;
				echo $data;
			}
		}
		public function set_quiz(){
			 if(isset($_POST['quiz']))
				{
				$quiz=$_POST['quiz'];
				$data= new database_inc('idiot');
				$query="INSERT INTO `name of quiz`(name) VALUES('$quiz')";
					$data->tf_query($query);
				$query="CREATE TABLE `$quiz` (
				  `id` int(10) NOT NULL auto_increment,
				  `question` longtext NOT NULL,
				  `op1` varchar(50) NOT NULL,
				  `op2` varchar(50) NOT NULL,
				  `op3` varchar(50) NOT NULL,
				  `op4` varchar(50) NOT NULL,
				  `cop` varchar(50) NOT NULL,
				  PRIMARY KEY  (`id`)
				) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ";
				$result = $data->tf_query($query);
				if($result)
				{	
					$data = true;
					echo $data;

					//header("location:".URL."aim_admin/set_question");
				}
				}
		}
	}
?>