<?php
    require_once '../../models/database.php';

    function getAllTest()
	{
		$query ="SELECT * FROM `medical_test`";
		$cms = get($query);
		return $cms;	
    }
	
	 function getAllTest1($id)
	{
		$query ="SELECT * FROM `medical_test` WHERE PA_ID='$id'";
		$cms = get($query);
		return $cms;	
    }
    
    function getTest($id)
	{
		$query="SELECT * FROM `medical_test` WHERE MT_ID='$id'";
		$cms = get($query);
		return $cms[0];
    }
    
   
    
    function deleteTest($id)
    {
        $query="UPDATE medical_test SET status='inactive' WHERE MT_ID='$id'";
		execute($query);
		$query1="UPDATE medical_test SET status='inactive' WHERE id='$id'";
		execute($query1);
		header("Location:../../views/Admin/manageuser.php");
	}
	
	function getTest1($id)
	{
		$query="SELECT * FROM medical_test WHERE MT_ID='$id'";
		$user=get($query);
		return $user[0];
    }
    
    function editTest($id, $name, $dob, $mobile, $address, $gender, $email)
    {
      $query="UPDATE medical_test SET name='$name',dob='$dob',mobile='$mobile',address='$address',gender='$gender',email='$email' WHERE MT_ID='$id'";
		
		execute($query);
		header("Location:../../views/Admin/manageuser.php");
	}
	
	function insertTest($MT_ID, $MT_NAME, $MT_TYPE, $MT_DATE, $MT_RESULT, $MT_OBSERVATION, $A_ID, $D_ID, $PA_ID)
	{
		
		$query="INSERT INTO MEDICAL_TEST VALUES('$MT_ID','$MT_NAME','$MT_TYPE','$MT_DATE','$MT_RESULT','$MT_OBSERVATION','$A_ID','$D_ID','$PA_ID')";
		execute($query);
		
	}
	
	function insertTest1($MT_ID, $MT_NAME, $MT_TYPE, $MT_DATE, $MT_RESULT, $MT_OBSERVATION, $A_ID, $D_ID, $PA_ID)
	{
		
		$query="INSERT INTO `medical_test`(`MT_ID`, `MT_NAME`, `MT_TYPE`, `MT_DATE`, `MT_RESULT`, `MT_OBSERVATION`, `A_ID`, `D_ID`, `PA_ID`) VALUES ('$MT_ID','$MT_NAME','$MT_TYPE','$MT_DATE','$MT_RESULT','$MT_OBSERVATION','$A_ID','$D_ID','$PA_ID')";
		execute($query);
		
	}
    
	
	
	
	function liveSearch($key){
		$query = "SELECT * FROM `medical_test` WHERE PA_ID LIKE '%$key%'";
		$binventorys = getArray($query);
		return $binventorys;
		
	}

	function getTestU($id)
	{
		$query="SELECT * FROM login WHERE id='$id'";
		$user=get($query);
		return $user[0];
	}
?>