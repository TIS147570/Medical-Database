<?php
    require_once '../../models/database.php';

    function getAllPrescription()
	{
		$query ="SELECT p.PR_ID AS PRID, m.MED_ID AS MEDID, p.DISEASE AS DISEASE1, m.MED_NAME AS MEDNAME, m.MED_POWER AS MEDPOWER, m.MED_TIME AS MEDTIME, m.MED_PRICE AS MEDPRICE, p.PA_ID AS PAID FROM prescription p, medicine m where p.PR_ID = m.PR_ID ";
		$cms = get($query);
	return $cms;
	
	
	
	}

function getAllPrescription1($id)
	{
		$query ="SELECT p.PR_ID AS PRID, p.DISEASE AS DISEASE1, m.MED_NAME AS MEDNAME, m.MED_POWER AS MEDPOWER, m.MED_TIME AS MEDTIME, m.MED_PRICE AS MEDPRICE, p.PHID AS PAID FROM prescription p, medicine m where p.PR_ID = m.PR_ID AND p.PA_ID = '$id' ";
		$cms = get($query);
	return $cms;
	
	
	
	}	

function getAllPrescription2($id)
	{
		$query ="SELECT p.PR_ID AS PRID, p.DISEASE AS DISEASE1, m.MED_NAME AS MEDNAME, m.MED_POWER AS MEDPOWER, m.MED_TIME AS MEDTIME, m.MED_PRICE AS MEDPRICE, p.PA_ID AS PAID FROM prescription p, medicine m where p.PR_ID = m.PR_ID AND p.PA_ID = '$id' ";
		$cms = get($query);
	return $cms;
	
	
	
	}		
	
    function getPrescription($PR_ID)
	{
		$query="SELECT m.MED_NAME AS MEDNAME, m.MED_POWER AS MEDPOWER, m.MED_TIME AS MEDTIME, m.MED_PRICE AS MEDPRICE, p.PA_ID AS PAID FROM prescription p, medicine m where p.PR_ID = m.PR_ID AND m.MED_ID = '$PR_ID'";
		$cms=get($query);
		return $cms[0];
    }
    
   
    
    function deletePrescription($PR_ID)
    {
        $query="DELETE FROM `medicine` WHERE MED_ID = '$PR_ID'";
		execute($query);
		
		
	}
	
	function getPrescription1($PR_ID)
	{
		$query="SELECT * FROM Prescription WHERE PR_ID='$PR_ID' and status='active'";
		$Prescription=get($query);
		return $Prescription[0];
    }
	
	function getassist($U_ID){
		$query="SELECT PR_ID FROM `medicine` WHERE MED_ID='$U_ID'";
		$cms=get($query);
		return $cms[0];
		
		
	}
	
   function UPDATE_ASSIST($PR_ID, $PHID)
    {
        
		$query1="UPDATE `prescription` SET `A_ID`='$PHID' WHERE PR_ID='$PR_ID'";
		
		execute($query1);
		
		
	}
	
	function UPDATE_DOC($PR_ID, $PHID)
    {
        
		$query1="UPDATE `prescription` SET `D_ID`='$PHID' WHERE PR_ID='$PR_ID'";
		
		execute($query1);
		
		
	}
	
	  function UPDATE_PHAR($PR_ID, $PHID)
    {
        
		$query1="UPDATE `prescription` SET `PHID`='$PHID' WHERE PR_ID='$PR_ID'";
		
		execute($query1);
		
		
	}
	
	 function editPRES1($PR_ID, $MED_NAME, $MED_PRICE, $MED_TIME, $PHID, $MED_POWER)
    {
        $query="UPDATE `medicine` SET `MED_NAME`='$MED_NAME',`MED_POWER`='$MED_POWER',`MED_TIME`='$MED_TIME',`MED_PRICE`='$MED_PRICE' WHERE MED_ID='$PR_ID'";
		
		execute($query);
		
		//$query1="UPDATE `prescription` SET `A_ID`='$PHID' WHERE PR_ID='$PR_ID'";
		
		//execute($query1);
		
		
	}
	
	 function editPRES2($PR_ID, $MED_NAME, $MED_PRICE, $MED_TIME, $PHID, $MED_POWER)
    {
        $query="UPDATE `medicine` SET `MED_NAME`='$MED_NAME',`MED_POWER`='$MED_POWER',`MED_TIME`='$MED_TIME',`MED_PRICE`='$MED_PRICE' WHERE PR_ID='$PR_ID'";
		
		execute($query);
		
		$query1="UPDATE `prescription` SET `D_ID`='$PHID' WHERE PR_ID='$PR_ID'";
		
		execute($query1);
		
		
	}
	
	function insertPrescription($PR_ID, $DISEASE, $UPDATE_DATE, $A_ID, $D_ID, $PHID, $PA_ID)
	{
		
		$query="INSERT INTO prescription VALUES('$PR_ID','$DISEASE','$UPDATE_DATE','$A_ID','$D_ID','$PHID','$PA_ID')";
		execute($query);
		
	}
	function insertPrescription1($MED_ID, $MED_NAME, $MED_POWER, $MED_TIME, $MED_PRICE, $PR_ID)
	{
		
		
		$query="INSERT INTO `medicine`(`MED_ID`, `MED_NAME`, `MED_POWER`, `MED_TIME`, `MED_PRICE`, `PR_ID`) VALUES ('$MED_ID','$MED_NAME','$MED_POWER','$MED_TIME','$MED_PRICE','$PR_ID')";
		execute($query);
		
	}
	
    function accessPrescription($PR_ID, $password, $type, $ans, $status)
	{
		$query="INSERT INTO login VALUES('$PR_ID','$password','$type','$ans','$status')";
		execute($query);

	}
	
	
	function liveSearch($key){
		$query = "SELECT p.PR_ID AS PRID, p.DISEASE AS DISEASE1, m.MED_NAME AS MEDNAME, m.MED_POWER AS MEDPOWER, m.MED_TIME AS MEDTIME, m.MED_PRICE AS MEDPRICE, p.PA_ID AS PAID FROM prescription p, medicine m where p.PR_ID = m.PR_ID AND P.PA_ID LIKE '%$key%' ";
		$binventorys = getArray($query);
		return $binventorys;
		
	}
	
	

	function getPrescriptionU($PR_ID)
	{
		$query="SELECT * FROM prescription WHERE PR_ID='$PR_ID'";
		$Prescription=get($query);
		return $Prescription[0];
	}
?>