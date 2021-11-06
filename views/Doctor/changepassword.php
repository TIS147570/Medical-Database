<?php
include '../../controllers/userController.php';

    session_start();
       if(!isset( $_SESSION["loggedinuser"]))
       {
           header("Location:../login.php");
       }
       $aid=$_SESSION["loggedinuser"];
       $user=getUser($aid);

       $current_pass="";
       $err_current_pass="";

       $new_pass="";
       $err_new_pass="";

       $has_error=false;

       if(isset($_POST['submit']))
       {	
                   
                   if(empty($_POST['cpass']))
                   {
                       $err_current_pass="*current password requiers";
                       $has_error=true;
               
                       
                   }
                   else
                   {
                    $current_pass=$_POST['cpass'];
                    if (ctype_space($current_pass)) {
                        $err_current_pass="*Password can not be only spacces";
                        $has_error=true;
                    } 
                   }
                  
               
                   if(empty($_POST['npass']))
                   {
                       $err_new_pass="*new password Requires";
                       $has_error=true;
               
                       
                   }
                   else
                   {
                        $new_pass=$_POST['npass'];
                        if (ctype_space($new_pass)) {
                            $err_new_pass="*Password can not be only spacces";
                            $has_error=true;
                        } 
                       
                   }

                   if(!$has_error)
                   {
                       if($current_pass==$user['U_PASSWORD'])
                       {
                       updatePass($aid,$new_pass);
                       }
                       else{
                        $err_current_pass="*current password not matched";
                       }
                       
                   }
       }
   
      

?>


<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/changepassword.css">
    </head>
    <body>
       
           
        <div class="title" >MEDICAL DATABASE
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
					<button class="btn" onClick="location.href='managedonor.php'" value='managepres'><i class="fa fa-key">&nbsp;&nbsp;&nbsp;SEARCH DONOR</i></button><br>
                    <button class="btn" onClick=" location.href='../logout.php'"><i class="fa fa-sign-out">&nbsp;&nbsp;&nbsp;Log Out</i></button><br>
                </div>
                
        </div>

        <div class="welcome" ><i class="fa fa-user">&nbsp;&nbsp;&nbsp;<?php echo "Welcome User Id:".$_SESSION["loggedinuser"];?></i>

        </div>
        <div class="text" >Change Password</i>
        </div>
        <form method="post" action="">
        <div class="panel">



        
            <table  > 
                <tr>
                    <td> <h3>Current Password:</h3></td>
                    
                    <td><h3><input type="password" name="cpass" ></h3></td>
                    <td><span style="color:red"><?php echo $err_current_pass;?></span></td>
                 

                </tr>

            

                <tr>
                    <td> <h3>New Password:</h3></td>
                    
                    <td ><h3><input type="password" name="npass"></h3></td>
                    <td><span style="color:red"><?php echo $err_new_pass;?></span></td>
                 

                </tr>

                


            </table>

            <h3><input type="submit" name="submit" value="update"> </h3>

            

            
           
        </div>
        </form>

    
      



       
                
        
        

       
        
      
        

        
    </body>
</html>