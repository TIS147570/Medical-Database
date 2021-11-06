<?php
     include '../../controllers/PresController.php';

?>

<html>
    <head>
        <title>ADD PRESCRIPTION</title>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <style>
            body, html {
            height: 100%;
            margin: 0;
            }
            .bg {
            background-image: url("../../storage/package_image/detail.jpg");
            height: 100%; 
            background-position: center;
            background-repeat: repeat;
            background-size: cover;

        
        }
    </style>
            
    </head>
    <body class="bg">
    <?php
	
	session_start();
       if(!isset( $_SESSION["loggedinuser"]))
       {
           header("Location:../login.php");
       }
	   
	    $A_ID=$_SESSION["loggedinuser"];
	
	
            $err_DISEASE="";
            $DISEASE="";
			
            $MED_NAME="";
            $err_MED_NAME="";
            
            $MED_POWER="";
            $err_MED_POWER="";
           
            
			 
            
            $MED_TIME="";
            $err_MED_TIME="";
			
			$MED_PRICE="";
            $err_MED_PRICE="";
            
           // $A_ID="";
            //$err_A_ID="";
            $D_ID="";
            $err_D_ID="";
            
			$PA_ID="";
            $err_PA_ID="";

            $image="";
            $err_image="";
            $UPDATE_DATE="";
            $err_UPDATE_DATE="";

            $has_error=false;
             $x=rand(1,10000000);
            $PR_ID="PR-".$x;
             
            $y=rand(1,10000000);
            $MED_ID="MED-".$y;
            
			
			if(isset($_POST['more']))
            {
                
                if(empty($_POST['DISEASE']))
                {
                    $err_DISEASE="*Valid Name Required";
                    $has_error=true;
                }
                else
                {			
                    $DISEASE=htmlspecialchars($_POST['DISEASE']);
                    if (!preg_match("/^[a-zA-Z ]*$/",$DISEASE)) 
                    {
                        $err_DISEASE = "Valid Name Required";
                        $has_error=true;
                    }
                
                        
                }
                
              /* if(empty($_POST['A_ID']))
                {
                    $errA_ID="*Assistant ID Required";
                    $has_error=true;
                }
                else
                {			
                    $A_ID=htmlspecialchars($_POST['A_ID']);
                    
			    }*/
			
             
               if(empty($_POST['PA_ID']))
                {
                    $errPA_ID="*Patient ID Required";
                    $has_error=true;
                }
                else
                {			
                    $PA_ID=htmlspecialchars($_POST['PA_ID']);
                    
			    } 
                
                

                if(empty($_POST['D_ID']))
                {
                    $err_D_ID="*Doctor ID Required";
                    $has_error=true;
                }
                else
                {			
                    $D_ID=htmlspecialchars($_POST['D_ID']);
                    
                }
                
                if(empty($_POST['MED_NAME']))
                {
                    $err_MED_NAME="*MED_NAME Required";
                    $has_error=true;
                }
                else
                {			
                     $MED_NAME=htmlspecialchars($_POST['MED_NAME']);
                        
                }
                
                
              

                if(empty($_POST['MED_POWER']))
                {
                    $err_MED_POWER="*address Required";
                    $has_error=true;
                }
                else
                {			
                    $MED_POWER=htmlspecialchars($_POST['MED_POWER']);
                    
                }
				
				if(empty($_POST['MED_PRICE']))
                {
                    $err_MED_PRICE="*address Required";
                    $has_error=true;
                }
                else
                {			
                    $MED_PRICE=htmlspecialchars($_POST['MED_PRICE']);
                    
                }

                
                
                if(empty($_POST['UPDATE_DATE']))
                {
                    $err_UPDATE_DATE="*date Required";
                    $has_error=true;
                }
                else
                {			
                    $UPDATE_DATE=htmlspecialchars($_POST['UPDATE_DATE']);
                   
                }


              

               
                
               
               

                if(!$has_error)
		        {
                    

                    
                    $PR_ID=$_POST['PR_ID'];
					$MED_ID=$_POST['MED_ID'];
                    $DISEASE=$_POST['DISEASE'];
                    $PA_ID=$_POST['PA_ID'];
                    $A_ID=$_SESSION["loggedinuser"];
                    $UPDATE_DATE= $_POST['UPDATE_DATE'];
                    $MED_POWER= $_POST['MED_POWER'];
                   $D_ID=$_POST['D_ID'];
                   
					
                    $MED_NAME= $_POST['MED_NAME'];
                    $MED_TIME= $_POST['MED_TIME'];
                    $MED_PRICE= $_POST['MED_PRICE'];


                    

                    
                  insertPrescription($PR_ID, $DISEASE, $UPDATE_DATE, $A_ID, $D_ID, '0', $PA_ID);
                    
                  insertPrescription1($MED_ID, $MED_NAME, $MED_POWER, $MED_TIME, $MED_PRICE, $PR_ID);
                   

                    

                    // echo '<script>alert("Filled Up Properly")</script>';
                    header("Location:prescription.php?id=$PR_ID");
                }
                else
                    echo '<script>alert("Fill Up Properly")</script>';


            }
			
			
			
			

            if(isset($_POST['submit']))
            {
                
                if(empty($_POST['DISEASE']))
                {
                    $err_DISEASE="*Valid Name Required";
                    $has_error=true;
                }
                else
                {			
                    $DISEASE=htmlspecialchars($_POST['DISEASE']);
                    if (!preg_match("/^[a-zA-Z ]*$/",$DISEASE)) 
                    {
                        $err_DISEASE = "Valid Name Required";
                        $has_error=true;
                    }
                
                        
                }
                
              /* if(empty($_POST['A_ID']))
                {
                    $errA_ID="*Assistant ID Required";
                    $has_error=true;
                }
                else
                {			
                    $A_ID=htmlspecialchars($_POST['A_ID']);
                    
			    }*/
			
             
               if(empty($_POST['PA_ID']))
                {
                    $errPA_ID="*Patient ID Required";
                    $has_error=true;
                }
                else
                {			
                    $PA_ID=htmlspecialchars($_POST['PA_ID']);
                    
			    } 
                
                

                if(empty($_POST['D_ID']))
                {
                    $err_D_ID="*Doctor ID Required";
                    $has_error=true;
                }
                else
                {			
                    $D_ID=htmlspecialchars($_POST['D_ID']);
                    
                }
                
                if(empty($_POST['MED_NAME']))
                {
                    $err_MED_NAME="*MED_NAME Required";
                    $has_error=true;
                }
                else
                {			
                     $MED_NAME=htmlspecialchars($_POST['MED_NAME']);
                        
                }
                
                
              

                if(empty($_POST['MED_POWER']))
                {
                    $err_MED_POWER="*address Required";
                    $has_error=true;
                }
                else
                {			
                    $MED_POWER=htmlspecialchars($_POST['MED_POWER']);
                    
                }
				
				if(empty($_POST['MED_PRICE']))
                {
                    $err_MED_PRICE="*address Required";
                    $has_error=true;
                }
                else
                {			
                    $MED_PRICE=htmlspecialchars($_POST['MED_PRICE']);
                    
                }

                
                
                if(empty($_POST['UPDATE_DATE']))
                {
                    $err_UPDATE_DATE="*date Required";
                    $has_error=true;
                }
                else
                {			
                    $UPDATE_DATE=htmlspecialchars($_POST['UPDATE_DATE']);
                   
                }


              

               
                
               
               

                if(!$has_error)
		        {
                    

                    
                    $PR_ID=$_POST['PR_ID'];
					$MED_ID=$_POST['MED_ID'];
                    $DISEASE=$_POST['DISEASE'];
                    $PA_ID=$_POST['PA_ID'];
                    $A_ID=$_SESSION["loggedinuser"];
                    $UPDATE_DATE= $_POST['UPDATE_DATE'];
                    $MED_POWER= $_POST['MED_POWER'];
                   $D_ID=$_POST['D_ID'];
                   
					
                    $MED_NAME= $_POST['MED_NAME'];
                    $MED_TIME= $_POST['MED_TIME'];
                    $MED_PRICE= $_POST['MED_PRICE'];


                    

                    
                  insertPrescription($PR_ID, $DISEASE, $UPDATE_DATE, $A_ID, $D_ID, '0', $PA_ID);
                    
                  insertPrescription1($MED_ID, $MED_NAME, $MED_POWER, $MED_TIME, $MED_PRICE, $PR_ID);
                   

                    

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
        
        <h2>ADD PRESCRIPTION</h2>
        <h3> Complete the form & give necessary information</h3>
        <hr>
        <form method="post" action="" enctype="multipart/form-data">
            <table align="center">
                <tbody>
                    
                <tr>
                        <td>PRESCRIPTION ID</td>
                        <td><input type="text" style="width: 250;" value="<?php echo $PR_ID;?>" name="PR_ID" readonly></td>
                        <td><span style="color:red">*Please Store Your ID with Care.</span></td>
                    </tr>
                <tr>
				
				<tr>
                        <td>MEDICINE ID</td>
                        <td><input type="text" style="width: 250;" value="<?php echo $MED_ID;?>" name="MED_ID" readonly></td>
                      
                    </tr>
                <tr>
                       
                        
					 
                
                <tr>
                        <td>DISEASE NAME</td>
                        <td><input type="text" style="width: 250;" value="<?php echo $DISEASE;?>" name="DISEASE"></td>
                    </tr>
                  
                    <tr>
                        <td></td>
                        <td><span style="color:red"><?php echo $err_DISEASE;?></span></td>
                    </tr>
					
					<tr>
                        <td>MEDICINE NAME</td>
                        <td><input type="text" placeholder="Fill IT UP" style="width: 250;"value="<?php echo $MED_NAME;?>" name="MED_NAME"></td>
                    </tr>
                    <tr> 
                        <td></td>   
                        <td>Fill IT UP</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><span style="color:red"><?php echo $err_MED_NAME;?></span> </td>
                    </tr>
					
					<tr>
                        <td>MEDICINE POWER:</td>
                        <td><input type="text" style="width: 250;"value="<?php echo $MED_POWER;?>" name="MED_POWER"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><span style="color:red"><?php echo $err_MED_POWER;?></span></td>
                    </tr>
					
					<tr>
                        <td>MEDICINE PRICE:</td>
                        <td><input type="text" style="width: 250;"value="<?php echo $MED_PRICE;?>" name="MED_PRICE"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><span style="color:red"><?php echo $err_MED_PRICE;?></span></td>
                    </tr>
					
                     <tr>
                        <td>MEDICINE TIME:</td>
                        <td><input type="MED_TIME" style="width: 250;" value="<?php echo $MED_TIME;?>" name="MED_TIME"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><span style="color:red"><?php echo $err_MED_TIME;?></span></td>
                    </tr>
                   

                    
                    

                    <tr>
                        <td>PRESCRIPTION DATE</td>
                        <td><input type="date" name="UPDATE_DATE" style="width: 250;"></td>
                    </tr>
                
                    <tr>
                        <td></td>
                        <td>
                            <span style="color:red"><?php echo $err_UPDATE_DATE;?></span></td>
                    </tr>
					
					 <tr>
                        <td>ASSISTANT ID</td>
                        <td><input type="text" style="width: 250;" value="<?php echo $A_ID;?>" name="A_ID" readonly></td>
                        
                    </tr>
                <tr>

                    <tr>
                        <td>Doctor ID:</td>
                        <td><input type="text" style="width: 250;"value="<?php echo $D_ID;?>" name="D_ID"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><span style="color:red"><?php echo $err_D_ID;?></span></td>
                    </tr>
					
					<tr>
                        <td>Patient ID:</td>
                        <td><input type="text" style="width: 250;"value="<?php echo $PA_ID;?>" name="PA_ID"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><span style="color:red"><?php echo $err_PA_ID;?></span></td>
                    </tr>
                    
                   
                   
                    
                    <tr>
					    <td colspan="2">
                            <input type="submit" name="more" value="More" style="width: 100;">
                        </td>
						
						
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