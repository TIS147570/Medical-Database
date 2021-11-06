<?php
    require_once '../../models/database.php';
	
	
	
	function getAllUser()
	{
		$query ="SELECT * FROM apply WHERE status='active'";
		$cms = get($query);
		return $cms;	
    }
    
    function getUser($id)
	{
		$query="SELECT * FROM apply WHERE ap_id='$id'";
		$cms=get($query);
		return $cms[0];
    }
	
	  function deleteUser($id)
    {
        $query="UPDATE apply SET status='inactive' WHERE ap_id='$id'";
	execute($query);
	header("Location:../../views/Admin/managerequest.php");
	
	}
	
	
	
	
	function insertUser($apid, $cid, $bloodgroup, $quantity, $status)
	{
		
		$query="INSERT INTO apply VALUES('$apid','$cid','$bloodgroup','$quantity','$status')";
		execute($query);
		header("Location:../../views/Donor/home.php");
		
	}
	
	?>