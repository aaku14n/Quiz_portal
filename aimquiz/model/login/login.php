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
				
				$query="INSERT INTO `name of quiz`(name) VALUES('$quiz')";
					$this->database->tf_query($query);
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

		public function save_question(){
			
			$query = 'Select * from `name of quiz` ORDER BY `id` DESC';
			$result=$this->database->tf_query($query);
			$row = mysqli_fetch_array($result);
			 $quiz = $row['name'];
			// Inset question in database
			if(isset($_REQUEST['question']))
			{
				$question= mysql_real_escape_string($_REQUEST['question']);
				$option1 = mysql_real_escape_string($_REQUEST['option1']);
				$option2 = mysql_real_escape_string($_REQUEST['option2']);
				$option3 = mysql_real_escape_string($_REQUEST['option3']);
				$option4 = mysql_real_escape_string($_REQUEST['option4']);
				$query="SELECT * FROM `$quiz` WHERE(question='$question')";
				$result = $this->database->r_query($query);
				if(!mysqli_num_rows($result))
					{ 
					$query= "INSERT INTO `$quiz`( `question`, `op1`, `op2`, `op3`, `op4`) VALUES ('$question','$option1','$option2','$option3','$option4')";
					$result=$this->database->tf_query($query);
					if($result){
						$data=true;
						echo $data;
					}

}
}
		}
	}
?>