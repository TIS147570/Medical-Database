<?php
	require_once  '../models/database.php';
	
    $serverName="localhost";
	 $userName="root";
	 $password="";
	 $dbName="health";
    
	
	function getUser($id)
	//function getUser($id, $pass, $login)
	{
		
		$query="SELECT * FROM users WHERE U_ID='$id'";
		
		
		
 		
		$userss=get($query);

		if($userss != null)
		{ 
	return $userss[0];
	
	//if(password_verify($pass, $userss['U_PASSWORD'] )){
		
		
		//$login = true;}
			
			
		}

		else{
			return null;
		}
		
		
	}

	function forgetPassword($id,$pass)
    {
        $query="UPDATE users SET U_PASSWORD='$pass' WHERE U_ID='$id'";
		
		execute($query);
		header("Location:../views/users.php");
	}

	

	
	
	
?>