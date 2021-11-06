<?php
    require_once '../../models/database.php';

    function getAllDonor()
	{
		$query ="SELECT * FROM donor WHERE status='active' ORDER BY dob ASC";
		$cms = get($query);
		return $cms;	
    }
    
    function getDonor($id)
	{
		$query="SELECT * FROM donor WHERE c_id='$id'";
		$cms=get($query);
		return $cms[0];
    }
    
   
    
    function deleteDonor($id)
    {
        $query="UPDATE donor SET status='inactive' WHERE c_id='$id'";
		execute($query);
		$query1="UPDATE login SET status='inactive' WHERE id='$id'";
		execute($query1);
		header("Location:../../views/Admin/managedonor.php");
	}
	
	function getDonor1($id)
	{
		$query="SELECT * FROM donor WHERE c_id='$id' and status='active'";
		$donor=get($query);
		return $donor[0];
    }
   function editDonor($id, $name, $dob, $mobile, $address, $bloodgroup, $gender, $email)
    {
        $query="UPDATE donor SET name='$name',dob='$dob',mobile='$mobile',address='$address',bloodgroup='$bloodgroup',gender='$gender',email='$email' WHERE c_id='$id'";
		
		execute($query);
		header("Location:../../views/Admin/managedonor.php");
	}
	
	function insertDonor($c_id, $name, $dob, $mobile, $address, $bloodgroup, $status, $gender, $email, $type)
	{
		
		$query="INSERT INTO donor VALUES('$c_id','$name','$dob','$mobile','$address','$bloodgroup','$status', '$gender','$email','$type')";
		execute($query);
		
	}
    function accessDonor($id, $password, $type, $ans, $status)
	{
		$query="INSERT INTO login VALUES('$id','$password','$type','$ans','$status')";
		execute($query);

	}
	function updatePass($id, $password)
	{
		$query="UPDATE login SET password='$password' WHERE id='$id'";
		execute($query);
		header("Location:../logout.php");
		

	}
	
	function liveSearch($key){
		$query = "SELECT * FROM donor WHERE bloodgroup LIKE '%$key%' or type LIKE '%$key%'  and status='active' ORDER BY dob ASC";
		$binventorys = getArray($query);
		return $binventorys;
		
	}
	
	

	function getDonorU($id)
	{
		$query="SELECT * FROM login WHERE id='$id'";
		$donor=get($query);
		return $donor[0];
	}
?>