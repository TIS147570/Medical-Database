<?php
     include '../../controllers/TestController.php';

?>

<html>
    <head>
        <title>TEST ADDITION</title>
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
	
	
	
            $err_MT_NAME="";
            $MT_NAME="";
			
            $MT_RESULT="";
            $err_MT_RESULT="";
            
            $MT_TYPE="";
            $err_MT_TYPE="";
           
            
			 
            
            $MT_OBSERVATION="";
            $err_MT_OBSERVATION="";
            
           // $A_ID="";
            //$err_A_ID="";
            $D_ID="";
            $err_D_ID="";
            
			$PA_ID="";
            $err_PA_ID="";

            $image="";
            $err_image="";
            $MT_DATE="";
            $err_MT_DATE="";

            $has_error=false;

            $x=rand(1,10000000);
            $MT_ID="MT-".$x;
            

            if(isset($_POST['submit']))
            {
                
                if(empty($_POST['MT_NAME']))
                {
                    $err_MT_NAME="*Valid Name Required";
                    $has_error=true;
                }
                else
                {			
                    $MT_NAME=htmlspecialchars($_POST['MT_NAME']);
                    if (!preg_match("/^[a-zA-Z ]*$/",$MT_NAME)) 
                    {
                        $err_MT_NAME = "Valid Name Required";
                        $has_error=true;
                    }
                
                        
                }
                
             /*  if(empty($_POST['A_ID']))
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
                
                if(empty($_POST['MT_RESULT']))
                {
                    $err_MT_RESULT="*MT_RESULT Required";
                    $has_error=true;
                }
                else
                {			
                     $MT_RESULT=htmlspecialchars($_POST['MT_RESULT']);
                        
                }
                
                
              

                if(empty($_POST['MT_TYPE']))
                {
                    $err_MT_TYPE="*address Required";
                    $has_error=true;
                }
                else
                {			
                    $MT_TYPE=htmlspecialchars($_POST['MT_TYPE']);
                    
                }

                
                
                if(empty($_POST['MT_DATE']))
                {
                    $err_MT_DATE="*date Required";
                    $has_error=true;
                }
                else
                {			
                    $MT_DATE=htmlspecialchars($_POST['MT_DATE']);
                   
                }


              

               
                
               
               

                if(!$has_error)
		        {
                    

                     $MT_ID=$_POST['MT_ID'];
					
                    $MT_NAME=$_POST['MT_NAME'];
                    
                    $MT_DATE= $_POST['MT_DATE'];
                    
                    $MT_TYPE= $_POST['MT_TYPE'];
                   $PA_ID=$_POST['PA_ID'];
                    $A_ID=$_SESSION["loggedinuser"];
                    $D_ID=$_POST['D_ID'];
					
                    $MT_RESULT= $_POST['MT_RESULT'];
                    $MT_OBSERVATION= $_POST['MT_OBSERVATION'];
                    


                    

                    
                   insertTest($MT_ID, $MT_NAME, $MT_TYPE, $MT_DATE, $MT_RESULT, $MT_OBSERVATION, $A_ID, $D_ID, $PA_ID);
                    
                   

                    

                     echo '<script>alert("Filled Up Properly")</script>';
                    header("Location:home.php");
                }
                else
                    echo '<script>alert("Fill Up Properly")</script>';


            }
			
			
			
			
			
			
			 if(isset($_POST['more']))
            {
                
                if(empty($_POST['MT_NAME']))
                {
                    $err_MT_NAME="*Valid Name Required";
                    $has_error=true;
                }
                else
                {			
                    $MT_NAME=htmlspecialchars($_POST['MT_NAME']);
                    if (!preg_match("/^[a-zA-Z ]*$/",$MT_NAME)) 
                    {
                        $err_MT_NAME = "Valid Name Required";
                        $has_error=true;
                    }
                
                        
                }
                
               if(empty($_POST['A_ID']))
                {
                    $errA_ID="*Assistant ID Required";
                    $has_error=true;
                }
                else
                {			
                    $A_ID=htmlspecialchars($_POST['A_ID']);
                    
			    }
			
             
              /* if(empty($_POST['PA_ID']))
                {
                    $errPA_ID="*Patient ID Required";
                    $has_error=true;
                }
                else
                {			
                    $PA_ID=htmlspecialchars($_POST['PA_ID']);
                    
			    } */
                
                

                if(empty($_POST['D_ID']))
                {
                    $err_D_ID="*Doctor ID Required";
                    $has_error=true;
                }
                else
                {			
                    $D_ID=htmlspecialchars($_POST['D_ID']);
                    
                }
                
                if(empty($_POST['MT_RESULT']))
                {
                    $err_MT_RESULT="*MT_RESULT Required";
                    $has_error=true;
                }
                else
                {			
                     $MT_RESULT=htmlspecialchars($_POST['MT_RESULT']);
                        
                }
                
                
              

                if(empty($_POST['MT_TYPE']))
                {
                    $err_MT_TYPE="*address Required";
                    $has_error=true;
                }
                else
                {			
                    $MT_TYPE=htmlspecialchars($_POST['MT_TYPE']);
                    
                }

                
                
                if(empty($_POST['MT_DATE']))
                {
                    $err_MT_DATE="*date Required";
                    $has_error=true;
                }
                else
                {			
                    $MT_DATE=htmlspecialchars($_POST['MT_DATE']);
                   
                }


              

               
                
               
               

                if(!$has_error)
		        {
                    

                    
                    $MT_ID=$_POST['MT_ID'];
					
                    $MT_NAME=$_POST['MT_NAME'];
                    
                    $MT_DATE= $_POST['MT_DATE'];
                    
                    $MT_TYPE= $_POST['MT_TYPE'];
                   $PA_ID=$_POST['PA_ID'];
                    $A_ID=$_SESSION["loggedinuser"];
                    $D_ID=$_POST['D_ID'];
					
                    $MT_RESULT= $_POST['MT_RESULT'];
                    $MT_OBSERVATION= $_POST['MT_OBSERVATION'];
                    


                    

                    
                   insertTest($MT_ID, $MT_NAME, $MT_TYPE, $MT_DATE, $MT_RESULT, $MT_OBSERVATION, $A_ID, $D_ID, $PA_ID);
                    
                   

                    

                     //echo '<script>alert("Filled Up Properly")</script>';
                   header("Location:test.php?id=$MT_ID");
                }
                else
                    echo '<script>alert("Fill Up Properly")</script>';


            }
			
			
			
			
			
			

            if(isset($_POST['cancel']))
    {
                header("Location:home.php");
       
    }
        ?>
        
        <h2>TEST ADDITION</h2>
        <h3> Complete the form & give necessary information</h3>
        <hr>
        <form method="post" action="" enctype="multipart/form-data">
            <table align="center">
                <tbody>
                    
                <tr>
                        <td>TEST ID</td>
                        <td><input type="text" style="width: 250;" value="<?php echo $MT_ID;?>" name="MT_ID" readonly></td>
                        <td><span style="color:red">*Please Store Your ID with Care.</span></td>
                    </tr>
                <tr>
                        

                
                <tr>
                        <td>TEST Name</td>
                        <td><input type="text" style="width: 250;" value="<?php echo $MT_NAME;?>" name="MT_NAME"></td>
                    </tr>
                  
                    <tr>
                        <td></td>
                        <td><span style="color:red"><?php echo $err_MT_NAME;?></span></td>
                    </tr>
					
					<tr>
                        <td>TYPE:</td>
                        <td><input type="text" style="width: 250;"value="<?php echo $MT_TYPE;?>" name="MT_TYPE"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><span style="color:red"><?php echo $err_MT_TYPE;?></span></td>
                    </tr>
					
                    <tr>
                        <td>TEST RESULT</td>
                        <td><input type="text" placeholder="Fill IT UP" style="width: 250; height: 100;"value="<?php echo $MT_RESULT;?>" name="MT_RESULT"></td>
                    </tr>
                    <tr> 
                        <td></td>   
                        <td>Fill IT UP</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><span style="color:red"><?php echo $err_MT_RESULT;?></span> </td>
                    </tr>
                   

                    
                    

                    <tr>
                        <td>TEST DATE</td>
                        <td><input type="date" name="MT_DATE" style="width: 250;"></td>
                    </tr>
                
                    <tr>
                        <td></td>
                        <td>
                            <span style="color:red"><?php echo $err_MT_DATE;?></span></td>
                    </tr>
					
					 <td>Assistant ID:</td>
                        <td><input type="text" size="10" style="width: 250;" value="<?php echo $A_ID;?>" name="A_ID" readonly></td>
                    </tr>
                   

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
                        <td>OBSERVATION:</td>
                        <td><input type="MT_OBSERVATION" style="width: 250; height: 100;" value="<?php echo $MT_OBSERVATION;?>" name="MT_OBSERVATION"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><span style="color:red"><?php echo $err_MT_OBSERVATION;?></span></td>
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