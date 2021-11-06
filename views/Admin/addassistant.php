<?php
     include '../../controllers/userController.php';

?>

<html>
    <head>
        <title>ADD ASSISTANT</title>
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
            $err_U_NAME="";
            $U_NAME="";
			$err_U_NID="";
            $U_NID="";
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
			 
            
            $U_PASSWORD="";
            $err_U_PASSWORD="";
            $cU_PASSWORD="";
            $err_cU_PASSWORD="";
            

            $image="";
            $err_image="";
            $dob="";
            $err_dob="";

            $has_error=false;

            $x=rand(1,10000000);
            $U_ID="A-".$x;
            

            if(isset($_POST['submit']))
            {
                
                if(empty($_POST['U_NAME']))
                {
                    $err_U_NAME="*Valid Name Required";
                    $has_error=true;
                }
                else
                {			
                    $U_NAME=htmlspecialchars($_POST['U_NAME']);
                    if (!preg_match("/^[a-zA-Z ]*$/",$U_NAME)) 
                    {
                        $err_U_NAME = "Valid Name Required";
                        $has_error=true;
                    }
                
                        
                }
                if(empty($_POST['U_NID']))
                {
                    $err_U_NID="*address Required";
                    $has_error=true;
                }
                else
                {			
                    $U_NID=htmlspecialchars($_POST['U_NID']);
                    
                }
               
                
                if(empty($_POST['U_EMAIL']))
                {
                    $err_U_EMAIL="*U_EMAIL Required";
                    $has_error=true;
                }
                else
                {			
                    $U_EMAIL=htmlspecialchars($_POST['U_EMAIL']);
                    if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i",$U_EMAIL)) 
                    {
                        $err_U_EMAIL = "Valid U_EMAIL required";
                        $has_error=true;
                    }
                  
                        
                }
                
                
                if(empty($_POST['U_CONTACT']))
                {
                    $err_U_CONTACT="*U_CONTACT Required";
                    $has_error=true;
                }
                else
                {			
                    $U_CONTACT=htmlspecialchars($_POST['U_CONTACT']);
                    if (!preg_match("/^[0-9]{11}+$/",$U_CONTACT)) 
                    {
                        $err_U_CONTACT = "Valid Number Required";
                        $has_error=true;
                    }
                    
                }

                if(empty($_POST['HOSPITAL_Location']))
                {
                    $err_HOSPITAL_Location="*address Required";
                    $has_error=true;
                }
                else
                {			
                    $HOSPITAL_Location=htmlspecialchars($_POST['HOSPITAL_Location']);
                    
                }

                if(empty($_POST['U_GENDER']))
                {
                    $err_U_GENDER="*U_GENDER Required";
                    $has_error=true;
                }
                else
                {			
                    $U_GENDER=htmlspecialchars($_POST['U_GENDER']);
                    
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


              

                if((empty($_POST['U_PASSWORD'])) && (empty($_POST['cU_PASSWORD'])))
                {
                    $err_U_PASSWORD="*PASSWORDword Required";
                }
                else
                {	
                    $U_PASSWORD=$_POST['U_PASSWORD'];
                    $cU_PASSWORD=$_POST['cU_PASSWORD'];	
                    if($U_PASSWORD == $cU_PASSWORD)
                         $U_PASSWORD=htmlspecialchars($_POST['U_PASSWORD']);
                    else
                        $err_U_PASSWORD="U_PASSWORDword mismatch";     
                    
                }
                
               
               

                if(!$has_error)
		        {
                    

                    
                    $U_ID=$_POST['U_ID'];
					$U_NID=$_POST['U_NID'];
                    $U_NAME=$_POST['U_NAME'];
                    $dob=$_POST['dob'];
                    
                    $U_CONTACT= $_POST['U_CONTACT'];
                    $HOSPITAL_Location= $_POST['HOSPITAL_Location'];
                   
                    $U_GENDER= $_POST['U_GENDER'];
					
                    $U_EMAIL= $_POST['U_EMAIL'];
                    $U_PASSWORD= $_POST['U_PASSWORD'];
                    


                    

                    
                    insertUser($U_ID, $U_NID, 'assistant', $U_NAME, $U_PASSWORD, $U_EMAIL, $U_GENDER, $HOSPITAL_Location, $U_CONTACT, $dob);
                    
                   

                    

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
        
        <h2>ADD ASSISTANT</h2>
        <h3> Complete the form & give necessary information</h3>
        <hr>
        <form method="post" action="" enctype="multipart/form-data">
            <table align="center">
                <tbody>
                    
                <tr>
                        <td>User ID</td>
                        <td><input type="text" style="width: 250;" value="<?php echo $U_ID;?>" name="U_ID" readonly></td>
                        <td><span style="color:red">*Please Store Your ID with Care.</span></td>
                    </tr>
                <tr>
                        <td>NID:</td>
                        <td><input type="text" style="width: 250;"value="<?php echo $U_NID;?>" name="U_NID"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><span style="color:red"><?php echo $err_U_NID;?></span></td>
                    </tr>

                
                <tr>
                        <td>Name</td>
                        <td><input type="text" style="width: 250;" value="<?php echo $U_NAME;?>" name="U_NAME"></td>
                    </tr>
                  
                    <tr>
                        <td></td>
                        <td><span style="color:red"><?php echo $err_U_NAME;?></span></td>
                    </tr>
                    <tr>
                        <td>E-mail</td>
                        <td><input type="text" placeholder="ex:myname@example.com" style="width: 250;"value="<?php echo $U_EMAIL;?>" name="U_EMAIL"></td>
                    </tr>
                    <tr> 
                        <td></td>   
                        <td>example@example.com</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><span style="color:red"><?php echo $err_U_EMAIL;?></span> </td>
                    </tr>
                    <tr>
                        <td>Phone Number:</td>
                        <td><input type="text" size="10" style="width: 250;"placeholder="1235456" value="<?php echo $U_CONTACT;?>" name="U_CONTACT"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><span style="color:red"><?php echo $err_U_CONTACT;?></span></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Phone Number</td>
                    </tr>

                    <tr>
                        <td>Address:</td>
                        <td><input type="text" style="width: 250; height: 100;"value="<?php echo $HOSPITAL_Location;?>" name="HOSPITAL_Location"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><span style="color:red"><?php echo $err_HOSPITAL_Location;?></span></td>
                    </tr>
                    <tr>
                        <td>Gender:</td>
                        <td><select name="U_GENDER" style="width: 250;">
                                <option value=""></option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                
                            </select></td>
                    </tr>
		
                        <td></td>
                        <td><span style="color:red"><?php echo $err_U_GENDER;?></span></td>
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
                        <td>Password:</td>
                        <td><input type="U_PASSWORDword" style="width: 250;" value="<?php echo $U_PASSWORD;?>" name="U_PASSWORD"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><span style="color:red"><?php echo $err_U_PASSWORD;?></span></td>
                    </tr>
                    <tr>
                        <td>Confirm Password:</td>
                        <td><input type="U_PASSWORDword" style="width: 250;" value="<?php echo $cU_PASSWORD;?>" name="cU_PASSWORD"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><span style="color:red"><?php echo $err_cU_PASSWORD;?></span></td>
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