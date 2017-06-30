<?php
	 class database_inc {
		
		
		public function __construct($db_name){
                                $this->conn = new mysqli('localhost', 'root', '', $db_name);
                                if ($this->conn->connect_error){
				return mysqli_connect_error();
			}
			else{
                                                      
				return $this->conn;
			}
		}
         
		public function tf_query($query){
                   $this->result= mysqli_query($this->conn,$query)or die(mysqli_error($this->conn));
                               
				if($this->result){
					return $this->result;
				}
				else
					return $this->result;
			
		}

		public function r_query($query){
				if($query){
				//echo $query;			
				$this->result= mysqli_query($this->conn,$query)or die(mysqli_error($this->conn));
				if($this->result)
				{
					
                                    return $this->result;
				}
				else{
					return  $this->result;
				}
			}
			else{
				return false;
			}

			
		}
	}

