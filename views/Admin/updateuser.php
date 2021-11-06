<?php
include '../../controllers/userController.php';
$U_ID = $_GET["id"];
$user=getUser($U_ID);

    $U_NAME="";
    $err_U_NAME="";
$U_EMAIL="";
            $err_U_EMAIL="";
            $U_CONTACT="";
            $err_U_CONTACT="";
            $HOSPITAL_Location="";
            $err_HOSPITAL_Location="";
            $U_PASSWORDid="";
            $err_U_PASSWORDid="";
            $U_GENDER="";
            $err_U_GENDER="";
			 
            
            //$U_PASSWORD="";
            //$err_U_PASSWORD="";
            //$cU_PASSWORD="";
            //$err_cU_PASSWORD="";
            

            $dob="";
            $err_dob="";
   

    

    $has_error=false;

  session_start();
       if(!isset( $_SESSION["loggedinuser"]))
       {
           header("Location:../login.php");
       }

       if(isset($_POST['submit']))
	    {	
                    
                    if(ctype_space($_POST['U_NAME']))
                    {
                        $err_U_NAME="*U_NAME requiers";
                        $has_error=true;
                
                        
                    }
                    else
                    {
                    $U_NAME=$_POST['U_NAME'];
                    if (ctype_space($U_NAME)) {
                        $err_U_NAME="*U_NAME can not be only spacces";
                        $has_error=true;
                    }
                    else if(!preg_match('/^[a-zA-Z\s]+$/',$U_NAME))
                    {
                        $err_U_NAME="*U_NAME only contains letter and space";
                        $has_error=true;
                    }
                    }
                   
                  
                if(ctype_space($_POST['U_EMAIL']))
                {
                    $err_U_EMAIL="*U_EMAIL Required";
                    $has_error=true;
                }
                else
                {			
                    $U_EMAIL=htmlspecialchars($_POST['U_EMAIL']);
                    if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i",$U_EMAIL)) 
                    {
                        $err_U_EMAIL = "ValU_ID U_EMAIL required";
                        $has_error=true;
                    }
                  
                        
                }
                
                
                if(ctype_space($_POST['U_CONTACT']))
                {
                    $err_U_CONTACT="*U_CONTACT Required";
                    $has_error=true;
                }
                else
                {			
                    $U_CONTACT=htmlspecialchars($_POST['U_CONTACT']);
                    if (!preg_match("/^[0-9]{11}+$/",$U_CONTACT)) 
                    {
                        $err_U_CONTACT = "ValU_ID Number Required";
                        $has_error=true;
                    }
                    
                }

                if(ctype_space($_POST['HOSPITAL_Location']))
                {
                    $err_HOSPITAL_Location="*HOSPITAL_Location Required";
                    $has_error=true;
                }
                else
                {			
                    $HOSPITAL_Location=htmlspecialchars($_POST['HOSPITAL_Location']);
                    
                }

                if(ctype_space($_POST['U_GENDER']))
                {
                    $err_U_GENDER="*U_GENDER Required";
                    $has_error=true;
                }
                else
                {			
                    $U_GENDER=htmlspecialchars($_POST['U_GENDER']);
                    
                }
				
				

				
                
                
                if(ctype_space($_POST['dob']))
                {
                    $err_dob="*date Required";
                    $has_error=true;
                }
                else
                {			
                    $dob=htmlspecialchars($_POST['dob']);
                   
                }

                  

                    


                    if(!$has_error)
                    { $U_NAME=$_POST['U_NAME'];
                    $dob=$_POST['dob'];
                    
                    $$U_CONTACT= $_POST['U_CONTACT'];
                    $HOSPITAL_Location= $_POST['HOSPITAL_Location'];
                   
                    $U_GENDER= $_POST['U_GENDER'];
                    $U_EMAIL= $_POST['U_EMAIL'];
                        editUser($U_ID, $U_NAME, $dob, $$U_CONTACT, $HOSPITAL_Location, $U_GENDER, $U_EMAIL);
						
						
                    }
        }

        if(isset($_POST['delete']))
        {
            deleteUser1($U_ID);
        }

                   
                    
    
  
    
 
		
	
		
    

?>



<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/updateuser.css">
    </head>
    <body>
       
           
        <div class="title" >Medical Database
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

        <div class="welcome" ><i class="fa fa-user">&nbsp;&nbsp;&nbsp;<?php echo "Welcome User Id:".$_SESSION["loggedinuser"];?></i>

        </div>
        <div class="text" >Update User</i>
        </div>

        <form method="post" action="">
        <div class="panel">
            <table  > 
                <tr>
                    <td> <h3>Name:</h3></td>
                    
                    <td><h3><input type="text" name="U_NAME"  value="<?php echo $user["U_NAME"];?>" ></h3></td>
                    <td><span style="color:red"><?php echo $err_U_NAME;?></span></td>
                 

                </tr>

                <tr>
                    <td> <h3>Date of Birth:</h3></td>
                    
                    <td><h3><input type="date" name="dob"  value="<?php echo $user["dob"];?>"  ></h3></td>
                    <td></td>
                 

                </tr>

                <tr>
                    <td> <h3>Gender:</h3></td>
                    
                    <td><h3><input type="text" name="U_GENDER"  value="<?php echo $user["U_GENDER"];?>" > </h3></td>
                    <td></td>
                 

                

                <tr>
                    <td> <h3>Email:</h3></td>
                    
                    <td style><h3><input type="text" name="U_EMAIL" value="<?php echo $user["U_EMAIL"];?>"></h3></td>
                    <td></td>
                 

                </tr>

                <tr>
                    <td> <h3>Phone No:</h3></td>
                    
                    <td><h3><input type="text" name="U_CONTACT" value="<?php echo $user["U_CONTACT"];?>"></h3></td>
                    <td></td>
                 

                </tr>

                <tr>
                    <td> <h3>Address:</h3></td>
                    
                    <td><h3><input type="text" name="HOSPITAL_Location" value="<?php echo $user["HOSPITAL_Location"];?>"></h3></td>
                    <td></td>
                 

                </tr>

               
               

                

               


                


            </table>

            <h3><input type="submit" name="submit" value="Update"> <input type="submit" name="delete" value="Delete"style="background-color:red"></h3>

            

            
           
        </div>
        </form>

    
      



       
                
        
        

       
        
      
        

        
    </body>
</html>