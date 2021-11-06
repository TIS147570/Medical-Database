<?php
    require_once '../../models/database.php';

    function getAllUser()
	{
		$query ="SELECT * FROM users WHERE U_ID<>'0' AND U_ID<>'1'";
		$cms = get($query);
		return $cms;	
    }
    
    function getUser($U_ID)
	{
		$query="SELECT * FROM `users` WHERE U_ID='$U_ID'";
		$cms=get($query);
		return $cms[0];
    }
	
	function getUser1($U_ID)
	{
		$query="SELECT * FROM `users` WHERE U_ID='$U_ID'";
		$cms=get($query);
		return $cms[0];
		header("Location:../../views/Patient/home.php");
    }
    
   
    
    function deleteUser1($U_ID)
    {
        
		
		$query="DELETE FROM `users` WHERE `users`.`U_ID` = '$U_ID'";
		execute($query);
		header("Location:../../views/Admin/manageuser.php");
	}
	function CountAllUser1()
	{
		$query="SELECT COUNT(U_NAME) AS ALLUSER FROM `users`";
		$user=get($query);
	return $user[0];}
	
	function CountAllUser11()
	{
		
		$query1="SELECT COUNT(U_NAME) AS ALLUSER1 FROM `users` WHERE U_TYPE = 'doctor'";
		$user1=get($query1);
	return $user1[0];}
	function CountAllUser111()
	{
		
		$query2="SELECT COUNT(U_NAME) AS ALLUSER2 FROM `users` WHERE U_TYPE = 'patient'";
		$user2=get($query2);
		return $user2[0];
    }
	
	
	function CountAllUser($U_ID)
	{
		$query="SELECT COUNT(U_NAME) AS ALLUSER FROM `users` WHERE join_date >= '$U_ID'";
		$user=get($query);
		return $user[0];
    }
	
	
	function CountDoctor($U_ID)
	{
		$query="SELECT COUNT(U_NAME) AS ALLUSER1 FROM `users` WHERE join_date >= '$U_ID' AND U_TYPE = 'doctor'";
		$user=get($query);
		return $user[0];
    }
	
	function CountPatient($U_ID)
	{
		$query="SELECT COUNT(U_NAME) AS ALLUSER2 FROM `users` WHERE join_date >= '$U_ID' AND U_TYPE = 'patient'";
		$user=get($query);
		return $user[0];
    }
    
    function editUser($U_ID, $U_NAME, $dob, $U_CONTACT, $HOSPITAL_Location, $U_GENDER, $U_EMAIL)
    {
      $query="UPDATE `users` SET `U_NAME`='$U_NAME',`U_EMAIL`='$U_EMAIL',`U_GENDER`='$U_GENDER',`HOSPITAL_Location`='$HOSPITAL_Location',`U_CONTACT`='$U_CONTACT',`dob`='$dob' WHERE U_ID='$U_ID'";
		
		execute($query);
		header("Location:../../views/Admin/manageuser.php");
	}
	
	 function editUser1($U_ID, $U_NAME, $dob, $U_CONTACT, $HOSPITAL_Location, $U_GENDER, $U_EMAIL)
    {
      $query="UPDATE `users` SET `U_NAME`='$U_NAME',`U_EMAIL`='$U_EMAIL',`U_GENDER`='$U_GENDER',`HOSPITAL_Location`='$HOSPITAL_Location',`U_CONTACT`='$U_CONTACT',`dob`='$dob' WHERE U_ID='$U_ID'";
		
		execute($query);
		header("Location:../../views/Patient/home.php");
	}
	
	function insertUser($U_ID, $U_NID, $U_TYPE, $U_NAME, $U_PASSWORD, $U_EMAIL, $U_GENDER, $HOSPITAL_Location, $U_CONTACT, $dob)
	{
		$hashed = password_hash($U_PASSWORD, PASSWORD_DEFAULT);
		
		$query="INSERT INTO `users`(`U_ID`, `U_NID`, `U_TYPE`, `U_NAME`, `U_PASSWORD`, `U_EMAIL`, `U_GENDER`, `HOSPITAL_Location`, `U_CONTACT`, `dob`) VALUES ('$U_ID','$U_NID','$U_TYPE','$U_NAME','$hashed','$U_EMAIL','$U_GENDER','$HOSPITAL_Location','$U_CONTACT','$dob')";
		
		//$query="INSERT INTO `users`(`U_ID`, `U_NID`, `U_TYPE`, `U_NAME`, `U_PASSWORD`, `U_EMAIL`, `U_GENDER`, `HOSPITAL_Location`, `U_CONTACT`, `dob`) VALUES ('$U_ID','$U_NID','$U_TYPE','$U_NAME','$U_PASSWORD','$U_EMAIL','$U_GENDER','$HOSPITAL_Location','$U_CONTACT','$dob')";
		
		execute($query);
		
		
		
	}
	
	
    
	function updatePass($U_ID, $U_PASSWORD)
	{
		//$query="UPDATE users SET U_PASSWORD ='$U_PASSWORD ' WHERE U_ID='$U_ID'";
		$hashed = password_hash($U_PASSWORD, PASSWORD_DEFAULT);
		$query="UPDATE users SET U_PASSWORD ='$hashed' WHERE U_ID='$U_ID'";
		
		execute($query);
		header("Location:../logout.php");
		

	}
	
	
	function liveSearch($key){
		$query = "SELECT * FROM users WHERE U_ID LIKE '%$key%'";
		$binventorys = getArray($query);
		return $binventorys;
		
	}

	function getUserU($U_ID)
	{
		$query="SELECT * FROM login WHERE id='$U_ID'";
		$user=get($query);
		return $user[0];
	}
?>