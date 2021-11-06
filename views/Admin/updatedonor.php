<?php
include '../../controllers/donorController.php';
$eid = $_GET["id"];
$donor=getDonor($eid);

    $name="";
    $err_name="";
$email="";
            $err_email="";
            $phoneNumber="";
            $err_phoneNumber="";
            $address1="";
            $err_address1="";
            
            $gender="";
            $err_gender="";
			 $bloodgroup="";
            $err_bloodgroup="";
            
            $pass="";
            $err_pass="";
            $cpass="";
            $err_cpass="";
            $qsn="";
            $err_qsn="";
            $ans="";
            $err_ans="";

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
                    
                    if(ctype_space($_POST['ename']))
                    {
                        $err_name="*name requiers";
                        $has_error=true;
                
                        
                    }
                    else
                    {
                    $name=$_POST['ename'];
                    if (ctype_space($name)) {
                        $err_name="*name can not be only spacces";
                        $has_error=true;
                    }
                    else if(!preg_match('/^[a-zA-Z\s]+$/',$name))
                    {
                        $err_name="*name only contains letter and space";
                        $has_error=true;
                    }
                    }
                   
                  
                if(ctype_space($_POST['email']))
                {
                    $err_email="*email Required";
                    $has_error=true;
                }
                else
                {			
                    $email=htmlspecialchars($_POST['email']);
                    if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i",$email)) 
                    {
                        $err_email = "Valid email required";
                        $has_error=true;
                    }
                  
                        
                }
                
                
                if(ctype_space($_POST['phoneNumber']))
                {
                    $err_phoneNumber="*phoneNumber Required";
                    $has_error=true;
                }
                else
                {			
                    $phoneNumber=htmlspecialchars($_POST['phoneNumber']);
                    if (!preg_match("/^[0-9]{11}+$/",$phoneNumber)) 
                    {
                        $err_phoneNumber = "Valid Number Required";
                        $has_error=true;
                    }
                    
                }

                if(ctype_space($_POST['address']))
                {
                    $err_address1="*address Required";
                    $has_error=true;
                }
                else
                {			
                    $address1=htmlspecialchars($_POST['address1']);
                    
                }

                if(ctype_space($_POST['gender']))
                {
                    $err_gender="*gender Required";
                    $has_error=true;
                }
                else
                {			
                    $gender=htmlspecialchars($_POST['gender']);
                    
                }
				
				
				if(ctype_space($_POST['bloodgroup']))
                {
                    $err_bloodgroup="*bloodgroup Required";
                    $has_error=true;
                }
                else
                {			
                    $bloodgroup=htmlspecialchars($_POST['bloodgroup']);
                    
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
                    { $name=$_POST['ename'];
                    $dob=$_POST['dob'];
                    
                    $$phoneNumber= $_POST['phoneNumber'];
                    $address1= $_POST['address1'];
                   
                    $gender= $_POST['gender'];
					$bloodgroup= $_POST['bloodgroup'];
                    $email= $_POST['email'];
                        editDonor($eid, $name, $dob, $$phoneNumber, $address1, $bloodgroup, $gender, $email);
						
						
                    }
        }

        if(isset($_POST['delete']))
        {
            deleteDonor($eid);
        }

                   
                    
    
  
    
 
		
	
		
    

?>



<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/updatedonor.css">
    </head>
    <body>
       
           
        <div class="title" >BLOOD BANK MANAGEMENT SYSTEM
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
        <div class="text" >Update Donor</i>
        </div>

        <form method="post" action="">
        <div class="panel">
            <table  > 
                <tr>
                    <td> <h3>Name:</h3></td>
                    
                    <td><h3><input type="text" name="ename"  value="<?php echo $donor["name"];?>" ></h3></td>
                    <td><span style="color:red"><?php echo $err_name;?></span></td>
                 

                </tr>

                <tr>
                    <td> <h3>Date of Birth:</h3></td>
                    
                    <td><h3><input type="date" name="dob"  value="<?php echo $donor["$dob"];?>"  ></h3></td>
                    <td></td>
                 

                </tr>

                <tr>
                    <td> <h3>Gender:</h3></td>
                    
                    <td><h3><input type="text" name="gender"  value="<?php echo $donor["gender"];?>" > </h3></td>
                    <td></td>
                 

                </tr>
				<tr>
                    <td> <h3>Blood Group:</h3></td>
                    
                    <td><h3><input type="text" name="bloodgroup"  value="<?php echo $donor["bloodgroup"];?>"> </h3></td>
                    <td></td>
                 

                </tr>

                <tr>
                    <td> <h3>Email:</h3></td>
                    
                    <td style><h3><input type="text" name="email" value="<?php echo $donor["email"];?>"></h3></td>
                    <td></td>
                 

                </tr>

                <tr>
                    <td> <h3>Phone No:</h3></td>
                    
                    <td><h3><input type="text" name="phoneNumber" value="<?php echo $donor["mobile"];?>"></h3></td>
                    <td></td>
                 

                </tr>

                <tr>
                    <td> <h3>Address:</h3></td>
                    
                    <td><h3><input type="text" name="address1" value="<?php echo $donor["address"];?>"></h3></td>
                    <td></td>
                 

                </tr>

               
               

                

               


                


            </table>

            <h3><input type="submit" name="submit" value="Update"> <input type="submit" name="delete" value="Delete" style="background-color:red"></h3>

            

            
           
        </div>
        </form>

    
      



       
                
        
        

       
        
      
        

        
    </body>
</html>