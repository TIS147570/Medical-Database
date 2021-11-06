<?php
	 $serverName="localhost";
	 $userName="root";
	 $password="";
	 $dbName="health";
	function execute($query) //executing non query
	{
		global $serverName;
		global $userName;
		global $password;
		global $dbName;
		$conn = mysqli_connect($serverName, $userName,  $password, $dbName);
		mysqli_query($conn,$query);
		mysqli_close($conn);
	}
	
	function execute1($query){ //this one is for insert, update ,delete,
		global $serverName, $userName,  $password, $dbName;
		$conn = mysqli_connect($serverName, $userName,  $password, $dbName);
		$result = mysqli_query($conn,$query);
	}
	
	function get($query)
	{   
        $data=array();//numeric array
		global $serverName,$userName,$password,$dbName;
		$conn = mysqli_connect( $serverName, $userName, $password, $dbName);
        $result=mysqli_query($conn,$query);
        if(mysqli_num_rows($result) > 0)
        {
            while($row = mysqli_fetch_assoc($result))
            {
                $entity=array();//associative array
                foreach($row as $k=>$v)           
                {
                    $entity[$k] = $row[$k];    
                }
                $data[] = $entity;																
            }
        }
        
        mysqli_close($conn);
        
		return $data;
	}
	
	function getResult($query){ //this one is for select query
		global $servername, $userName, $userName,$db_name;
		$conn = mysqli_connect($servername,$userName,$userName,$db_name);
		$result = mysqli_query($conn,$query);
		return $result;
	}
	function getArray($query){
		global $serverName, $userName, $password, $dbName;
		$conn = mysqli_connect($serverName,$userName,$password,$dbName);
		$result = mysqli_query($conn,$query);
		$data = array();
		while($row = mysqli_fetch_assoc($result)){
			$data[] = $row;
		}
		return $data;
	}
	
	
	
	
	
	
?>