<?php
     include '../../controllers/donorController.php';

?>

<html>
    <head>
        <title>ADD DONOR</title>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <style>
            body, html {
            height: 100%;
            margin: 0;
            }
            .bg {
            background-image: url("../../storage/package_image/reg.png");
            height: 100%; 
            background-position: center;
            background-repeat: repeat;
            background-size: cover;

        
        }
    </style>
            
    </head>
    <body class="bg">
    <?php
            $err_fname="";
            $fname="";
            $email="";
            $err_email="";
            $phoneNumber="";
            $err_phoneNumber="";
            $address1="";
            $err_address1="";
            $passid="";
            $err_passid="";
            $gender="";
            $err_gender="";
			 $bloodgroup="";
            $err_bloodgroup="";
            
            $pass="";
            $err_pass="";
            $cpass="";
            $err_cpass="";
            $type="";
            $err_type="";
            

            $dob="";
            $err_dob="";

            $has_error=false;

            $x=rand(1,10000000);
            $cid="D-".$x;
            

            if(isset($_POST['submit']))
            {
                
                if(empty($_POST['fname']))
                {
                    $err_fname="*Valid Name Required";
                    $has_error=true;
                }
                else
                {			
                    $fname=htmlspecialchars($_POST['fname']);
                    if (!preg_match("/^[a-zA-Z ]*$/",$fname)) 
                    {
                        $err_fname = "Valid Name Required";
                        $has_error=true;
                    }
                
                        
                }
                
               
                
                if(empty($_POST['email']))
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
                
                
                if(empty($_POST['phoneNumber']))
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

                if(empty($_POST['address1']))
                {
                    $err_address1="*address Required";
                    $has_error=true;
                }
                else
                {			
                    $address1=htmlspecialchars($_POST['address1']);
                    
                }
				
				
				if(empty($_POST['type']))
                {
                    $err_type="*address Required";
                    $has_error=true;
                }
                else
                {			
                    $type=htmlspecialchars($_POST['type']);
                    
                }
				
				

                if(empty($_POST['gender']))
                {
                    $err_gender="*gender Required";
                    $has_error=true;
                }
                else
                {			
                    $gender=htmlspecialchars($_POST['gender']);
                    
                }
				
				
				if(empty($_POST['bloodgroup']))
                {
                    $err_bloodgroup="*bloodgroup Required";
                    $has_error=true;
                }
                else
                {			
                    $bloodgroup=htmlspecialchars($_POST['gender']);
                    
                }
				
                
                
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
                    

                    
                    $c_id=$_POST['cid'];
                    $fname=$_POST['fname'];
                    $dob=$_POST['dob'];
                    
                    $phoneNumber= $_POST['phoneNumber'];
                    $address1= $_POST['address1'];
                   $type= $_POST['type'];
                    $gender= $_POST['gender'];
					$bloodgroup= $_POST['bloodgroup'];
                    $email= $_POST['email'];
                    


                    

                    
                    insertDonor($c_id, $fname, $dob, $phoneNumber, $address1,$bloodgroup, 'active', $gender, $email, $type);
                    
                    //accessDonor($c_id, $pass, 'donor', $ans, 'active');

                    

                     echo '<script>alert("Filled Up Properly")</script>';
                    header("Location:home.php");
                }
                else
                    echo '<script>alert("Fill Up Properly")</script>';


            }

            if(isset($_POST['cancel']))
    {
                header("Location:home.php");
       
    }
        ?>
        
        <h2>Donor Registration</h2>
        <h3> Complete the form & give necessary information</h3>
        <hr>
        <form method="post" action="" enctype="multipart/form-data">
            <table align="center">
                <tbody>
                    
                <tr>
                        <td>Donor ID</td>
                        <td><input type="text" style="width: 250;" value="<?php echo $cid;?>" name="cid" readonly></td>
                        <td><span style="color:red">*Please Store Your ID with Care.</span></td>
                    </tr>
                
                
                <tr>
                        <td>Name</td>
                        <td><input type="text" style="width: 250;" value="<?php echo $fname;?>" name="fname"></td>
                    </tr>
                  
                    <tr>
                        <td></td>
                        <td><span style="color:red"><?php echo $err_fname;?></span></td>
                    </tr>
                    <tr>
                        <td>E-mail</td>
                        <td><input type="text" placeholder="ex:myname@example.com" style="width: 250;"value="<?php echo $email;?>" name="email"></td>
                    </tr>
                    <tr> 
                        <td></td>   
                        <td>example@example.com</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><span style="color:red"><?php echo $err_email;?></span> </td>
                    </tr>
                    <tr>
                        <td>Phone Number:</td>
                        <td><input type="text" size="10" style="width: 250;"placeholder="1235456" value="<?php echo $phoneNumber;?>" name="phoneNumber"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><span style="color:red"><?php echo $err_phoneNumber;?></span></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Phone Number</td>
                    </tr>

                    <tr>
                        <td>Address:</td>
                        <td><input type="text" style="width: 250; height: 100;"value="<?php echo $address1;?>" name="address1"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><span style="color:red"><?php echo $err_address1;?></span></td>
                    </tr>
                    <tr>
                        <td>Gender:</td>
                        <td><select name="gender" style="width: 250;">
                                <option value=""></option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                
                            </select></td>
                    </tr><tr>
		
                        <td></td>
                        <td><span style="color:red"><?php echo $err_gender;?></span></td>
                    </tr>
					
					<td>Type:</td>
                        <td><input type="text" style="width: 250;"value="<?php echo $type;?>" name="type"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><span style="color:red"><?php echo $err_type;?></span></td>
                    </tr>
					
					
					
					<tr>
<td>Blood Group :</td>
    <td>
     <select name="bloodgroup" style="width: 250;">
      <option value=""></option>
      <option value="O+">O+</option>
      <option value="O-">O-</option>
      <option value="A+">A+</option>
      <option value="A-">A-</option>
	  <option value="B+">B+</option>
	  <option value="B-">B-</option>
	  <option value="AB+">AB+</option>
	  <option value="AB-">AB-</option>
      
      
     </select>
	 </td></tr>
                     <tr>
                        <td></td>
                        <td><span style="color:red"><?php echo $err_bloodgroup;?></span></td>
                    </tr>


                    <tr>
                        <td>Birth Date:</td>
                        <td><input type="date" name="dob" style="width: 250;"></td>
                    </tr>
                
                    <tr>
                        <td></td>
                        <td>
                            <span style="color:red"><?php echo $err_dob;?></span></td>
                    </tr>
                    
                    
                    
                    <tr>
                        <td colspan="2">
                            <input type="submit" name="submit" value="Submit" style="width: 100;">
                        </td>
                        <td colspan="2">
                            <input type="submit" name="cancel" value="cancel" style="width: 100;">
                        </td>
                        
                        
                        
                    </tr>
                </tbody>
            </table>
        </form>    
    </body>
</html>