<?php
include '../../controllers/userController.php';
$users=CountAllUser1();
$user=CountAllUser11();
$use=CountAllUser111();

$dob="";
$err_dob="";
$Tdate = date('m-d-Y');
$has_error=false;


	session_start();
       if(!isset( $_SESSION["loggedinuser"]))
       {
           header("Location:../login.php");
       }
	   
	   if(isset($_POST['submit']))
	    {
			
			
			if(empty($_POST['dob']))
                {
                    $err_dob="*date Required";
                    $has_error=true;
                }
                else
                {			
                    $dob=htmlspecialchars($_POST['dob']);
                   
                }
				
				if(!$has_error)
		        {
					
				$dob=$_POST['dob'];
				
				//header("Location:forgetpassword.php");
				
				session_start();
                        $_SESSION["usercounter"]=$dob;
                        header("Location:countuser.php");
						
							setcookie("usercounter",$dob,time()+6000);
				
				}
				
		}
		
?>

<html>
	<head>
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/changepassword1.css">

       


        
	
    </head>
    <body >
       
           
        <div class="title" >ENTER A DATE TO WATCH THE NO OF USER FROM THAT DAY TILL NOW
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
        

       

        

<form method="post" action="">
        <div class="panel">
            <table  > 	
	
	
	
	<tr>
                        <td>Choose A Date:</td>
                        <td><input type="date" name="dob" style="width: 250; "></td>
                    </tr>
                
                    <tr>
                        <td></td>
                        <td>
                            <span style="color:red"><?php echo $err_dob;?></span></td>
                    </tr>
					<tr>
                    <td> <h3>Today's Date:</h3></td>
                    
                    <td><h3><input type="text" name="Tdate" readonly value="<?php echo $Tdate;?>"></h3></td>
                    <td></td>
                 

                </tr>
					
					
				
					
		</table>

    <h3><input type="submit" name="submit" value="Submit"></h3>

            

            			
					
					
				<div class="text" >NO OF ALL USER</br>		<h2>Total Users <?php echo $users["ALLUSER"];?><br> Total Doctors <?php echo $user["ALLUSER1"];?><br>Total Patients <?php echo $use["ALLUSER2"];?></i>
        </div>	
					
					
					
					
					
					
					
					
					
					
					
					
					
	 </div>
	 
	 
	 
        </form>

    
      



       
                
        
        

       
        
      
        

        
    </body>
</html>
		
		
		