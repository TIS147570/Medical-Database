<?php
include '../../controllers/PresController.php';

session_start();
       if(!isset( $_SESSION["loggedinuser"]))
       {
           header("Location:../login.php");
       }
	   
	   $PAID=$_SESSION["loggedinuser"]; 
$PR_ID = $_GET["id"];
$donor=getPrescription($PR_ID);
$donors=getassist($PR_ID);
$PRID= $donors["PR_ID"];

    $MEDNAME="";
    $err_MEDNAME="";
$MEDPOWER="";
            $err_MEDPOWER="";
            $MEDPRICE="";
            $err_MEDPRICE="";
            $MEDTIME="";
            $err_MEDTIME="";
           
           
            //$err_PAID="";
			 
            
            //$U_PASSWORD="";
            //$err_U_PASSWORD="";
            //$cU_PASSWORD="";
            //$err_cU_PASSWORD="";
            

            //$dob="";
            //$err_dob="";
   

    

    $has_error=false;

  

       if(isset($_POST['submit']))
	    {	
                    
                    if(ctype_space($_POST['MEDNAME']))
                    {
                        $err_MEDNAME="*MEDNAME requiers";
                        $has_error=true;
                
                        
                    }
                    else
                    {
                    $MEDNAME=$_POST['MEDNAME'];
                    if (ctype_space($MEDNAME)) {
                        $err_MEDNAME="*MEDNAME can not be only spacces";
                        $has_error=true;
                    }
                    else if(!preg_match('/^[a-zA-Z\s]+$/',$MEDNAME))
                    {
                        $err_MEDNAME="*MEDNAME only contains letter and space";
                        $has_error=true;
                    }
                    }
                   
                  
                if(ctype_space($_POST['MEDPOWER']))
                    {
                        $err_MEDPOWER="*MEDPOWER requiers";
                        $has_error=true;
                
                        
                    }
                   else
                {			
                    $MEDPOWER=htmlspecialchars($_POST['MEDPOWER']);
                    
                }
                
                
                if(ctype_space($_POST['MEDPRICE']))
                    {
                        $err_MEDPRICE="*MEDPRICE requiers";
                        $has_error=true;
                
                        
                    }
                    else
                {			
                    $MEDPRICE=htmlspecialchars($_POST['MEDPRICE']);
                    
                }        

                if(ctype_space($_POST['MEDTIME']))
                {
                    $err_MEDTIME="*MEDTIME Required";
                    $has_error=true;
                }
                else
                {			
                    $MEDTIME=htmlspecialchars($_POST['MEDTIME']);
                    
                }

               
				
				

				
                
                
               

                  

                    


                    if(!$has_error)
                    { $MEDNAME=$_POST['MEDNAME'];
                    
                    
                    $MEDPRICE= $_POST['MEDPRICE'];
                    $MEDTIME= $_POST['MEDTIME'];
                    $PRID= $donors["PR_ID"];
                    $PAID=$_SESSION["loggedinuser"]; 
                    $MEDPOWER= $_POST['MEDPOWER'];
                        editPRES1($PR_ID, $MEDNAME, $MEDPRICE, $MEDTIME, $PAID, $MEDPOWER);
						UPDATE_ASSIST($PRID, $PAID);
						header("Location:managepres.php");
						
                    }
        }

        if(isset($_POST['delete']))
        {
            deletePrescription($PR_ID);
			header("Location:managepres.php");
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
                <button class="btn" onClick="location.href='home.php'" value='home'><i class="fa fa-home">&nbsp;&nbsp;&nbsp;Home</i></button><br>
					  <button class="btn" onClick="location.href='prescription1.php'" value='home'><i class="fa fa-home">&nbsp;&nbsp;&nbsp;Add Prescription</i></button><br>
					  <button class="btn" onClick="location.href='test1.php'" value='seerecords'><i class="fa fa-comments">&nbsp;&nbsp;&nbsp;Test Addition</i></button><br>
                    <button class="btn" onClick="location.href='show.php'" value='editprofile'><i class="fa fa-user">&nbsp;&nbsp;&nbsp;Show Info</i></button><br>
					
                  
                  <button class="btn" onClick="location.href='changepassword.php'" value='editprofile'><i class="fa fa-user">&nbsp;&nbsp;&nbsp;CHANGE PASSWORD</i></button><br>
                    <button class="btn" onClick="location.href='managepres.php'" value='managepres'><i class="fa fa-key">&nbsp;&nbsp;&nbsp;Manage Prescription</i></button><br>
					<button class="btn" onClick="location.href='managetest1.php'" value='managepres'><i class="fa fa-key">&nbsp;&nbsp;&nbsp;Manage Test</i></button><br>
                    <button class="btn" onClick=" location.href='../logout.php'"><i class="fa fa-sign-out">&nbsp;&nbsp;&nbsp;Log Out</i></button><br>
                </div>
                
        </div>

        <div class="welcome" ><i class="fa fa-user">&nbsp;&nbsp;&nbsp;<?php echo "Welcome User Id:".$_SESSION["loggedinuser"];?></i>

        </div>
        <div class="text" >Update Prescription</i>
        </div>

        <form method="post" action="">
        <div class="panel">
            <table  > 
                <tr>
                    <td> <h3>MEDICINE NAME:</h3></td>
                    
                    <td><h3><input type="text" name="MEDNAME"  value="<?php echo $donor["MEDNAME"];?>" ></h3></td>
                    <td><span style="color:red"><?php echo $err_MEDNAME;?></span></td>
                 

                </tr>


                <tr>
                    <td> <h3>ASSISTANT ID:</h3></td>
                    
                    <td><h3><input type="text" name="PAID" readonly  value="<?php echo $PAID;?>" > </h3></td>
                    <td></td>
                 

                

                <tr>
                    <td> <h3>MEDICINE POWER:</h3></td>
                    
                    <td style><h3><input type="text" name="MEDPOWER" value="<?php echo $donor["MEDPOWER"];?>"></h3></td>
                    <td></td>
                 

                </tr>

                <tr>
                    <td> <h3>MEDICINE PRICE:</h3></td>
                    
                    <td><h3><input type="text" name="MEDPRICE" value="<?php echo $donor["MEDPRICE"];?>"></h3></td>
                    <td></td>
                 

                </tr>

                <tr>
                    <td> <h3>MEDICINE TIME:</h3></td>
                    
                    <td><h3><input type="text" name="MEDTIME" value="<?php echo $donor["MEDTIME"];?>"></h3></td>
                    <td></td>
                 

                </tr>

               
               

                

               


                


            </table>

            <h3><input type="submit" name="submit" value="Update"> <input type="submit" name="delete" value="Delete"style="background-color:red"></h3>

            

            
           
        </div>
        </form>

    
      



       
                
        
        

       
        
      
        

        
    </body>
</html>