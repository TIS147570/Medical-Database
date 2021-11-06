<?php
    include '../../controllers/userController.php';
    
    session_start();
       if(!isset( $_SESSION["usercounter"]))
       {
           header("Location:userdetail.php");
       }
	   
	   $PA_ID=$_SESSION["usercounter"];
       $users=CountAllUser($PA_ID);
       $user=CountDoctor($PA_ID);
       $use=CountPatient($PA_ID);
	   
	   

?>

<html>
	<head>
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/changepassword.css">

       


        
	
    </head>
    <body >
       
           
        <div class="title" >User Info
        </div>
         
       

        <div class="dropdown">
            <button class="dropbtn"><i class="fa fa-bars">&nbsp;&nbsp;&nbsp;Menu</i></button>
             <div class="dropdown-content">
                  <button class="btn" onClick="location.href='home.php'" value='home'><i class="fa fa-home">&nbsp;&nbsp;&nbsp;Home</i></button><br>
					 <button class="btn" onClick="location.href='addassistant.php'" value='home'><i class="fa fa-home">&nbsp;&nbsp;&nbsp;Add Assistant</i></button><br>
                    <button class="btn" onClick="location.href='addpatient.php'" value='managepatient'><i class="fa fa-user-circle">&nbsp;&nbsp;&nbsp;Add Patient</i></button><br>
                    <button class="btn" onClick="location.href='addpharmacist.php'" value='managepharmacist'><i class="fa fa-user-circle">&nbsp;&nbsp;&nbsp;Add Pharmacistt</i></button><br>
                    
                    <button class="btn" onClick="location.href='adddoctor.php'" value='managedoctor'><i class="fa fa-id-badge">&nbsp;&nbsp;&nbsp;Add Doctor</i></button><br>
					<button class="btn" onClick="location.href='adddonor.php'" value='managedoctor'><i class="fa fa-id-badge">&nbsp;&nbsp;&nbsp;Add Donor</i></button><br>
                     <button class="btn" onClick="location.href='manageuser.php'" value='manageassistant'><i class="fa fa-id-badge">&nbsp;&nbsp;&nbsp;Manage Users</i></button><br>
                     
                    <button class="btn" onClick="location.href='managedonor.php'" value='managedonor'><i class="fa fa-id-badge">&nbsp;&nbsp;&nbsp;Manage Donor</i></button><br>
                     
                    
					<button class="btn" onClick="location.href='changepassword.php'" value='managepres'><i class="fa fa-key">&nbsp;&nbsp;&nbsp;CHANGE PASSWORD</i></button><br>
                    <button class="btn" onClick=" location.href='../logout.php'"><i class="fa fa-sign-out">&nbsp;&nbsp;&nbsp;Log Out</i></button><br>
                </div>
        </div>

        
	   
	   	<div class="text" >NO OF ALL USER</br>		<h2>Total Users <?php echo $users["ALLUSER"];?><br> Total Doctors <?php echo $user["ALLUSER1"];?><br>Total Patients <?php echo $use["ALLUSER2"];?></i>
        </div>	
		
		
		</body>
		</html>