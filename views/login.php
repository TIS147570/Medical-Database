<?php
	include '../controllers/loginController.php';
    session_start();
	if(isset($_SESSION["locked"])){
		$diff = time() - $_SESSION["locked"];
		if ($diff > 180){
			unset($_SESSION["locked"]);
			unset($_SESSION["login_attempt"]);
			$x=0;
		}
		
		
		
	}
    $UID="";
    $err_uname="";
    $pass="";
    $err_pass="";
    $err_invalid="";
    $type="";
    $has_error=false;
	//$login="";
   
    $flag=1;
	$x=0;
	
	if(isset($_POST['submit']))
	{	
		if(empty($_POST['uname']))
		{
			$err_uname="*User ID Required";
			$has_error=true;
			
		}
		else
		{
			$UID=$_POST['uname'];
		}
		if(empty($_POST['pass']))
		{
			$err_pass="*Password Required";
			$has_error=true;
			
		}
		else
		{
			$pass=$_POST['pass'];
		}
		
		 
		
		if(!$has_error)
		{
            $user=getUser($UID);
           // if($UID ==$user["U_ID"] && $pass ==$user["U_PASSWORD"] && $x < 3 )
				
			if($UID ==$user["U_ID"] && $x < 3)
                {
					if(password_verify($pass, $user["U_PASSWORD"])){
                    $type =$user["U_TYPE"] ;

                    if($type == "admin")
                    {
                        session_start();
                        $_SESSION["loggedinuser"]=$UID;
						
					
						
                        header("Location:Admin/home.php");
                    }

                    if($type == "assistant")
                    {
                        session_start();
                        $_SESSION["loggedinuser"]=$UID;
                        header("Location:Assistant/home.php");
						
							setcookie("Loggedinuser",$UID,time()+6000);
					setcookie("Loggedintype",$type,time()+600);
					setcookie("Loggedinpassword",$pass,time()+600);
						
                    }
                    if($type == "pharmacist")
                    {
                        session_start();
                        $_SESSION["loggedinuser"]=$UID;
                        header("Location:Pharmacist/home.php");
						setcookie("Loggedinuser",$UID,time()+6000);
					setcookie("Loggedintype",$type,time()+600);
					setcookie("Loggedinpassword",$pass,time()+600);
                    }

                   if($type == "patient")
                    {
                        session_start();
                        $_SESSION["loggedinuser"]=$UID;
                        header("Location:Patient/home.php");
						setcookie("Loggedinuser",$UID,time()+6000);
					setcookie("Loggedintype",$type,time()+600);
					setcookie("Loggedinpassword",$pass,time()+600);
                    }
					
					 if($type == "doctor")
                    {
                        session_start();
                        $_SESSION["loggedinuser"]=$UID;
                        header("Location:Doctor/home.php");
						setcookie("Loggedinuser",$UID,time()+6000);
					setcookie("Loggedintype",$type,time()+600);
					setcookie("Loggedinpassword",$pass,time()+600);
                    }

                }
				else
                {
                    $flag=0;
                }
				
				}

               

                else
                {
                    $flag=0;
                }
                    

			
        }
        
        if($flag == 0)
                {
			        $_SESSION["login_attempt"] += 1;
					$x += 1;
                    $err_invalid="Invalid USER ID or Password";
                    $UID="";
                    $pass="";
			    
                }
				
				if($_SESSION["login_attempt"] > 2)
			   {
				   $_SESSION["locked"]=time();
				   $err_invalid ="Please Wait For 3 minuites";
				   }
            }

           /* if(isset($_POST['submit1']))
            {
              header("Location:forgetU_PASSWORD.php");
            }*/



?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    body, html {
    height: 44%;
    margin: 0;
    }
    .bg {
    background-image: url("../storage/login_image/login.png");
    height: 44%; 
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;

   
  }
    </style>
  </head>
  <body class="bg">
      <div class="login-box">
      <h1>MEDICAL DATABASE</h1>
      <form method="post" action="">
      <div class="textbox">
        <i class="fas fa-user"></i>
        <input type="text" placeholder="USERID" value="<?php echo $UID;?>" name="uname">
        <?php echo $err_uname;?></span>
      </div>

      <div class="textbox">
        <i class="fas fa-lock"></i>
        <input type="password" placeholder="PASSWORD" value="<?php echo $pass;?>" name="pass">
        <span style="color:red"><?php echo $err_pass;?></span>
      </div>
     
    	
  <input type="submit" class="btn" value="Sign in" name="submit">
  <span style="color:red; font-size:20px"><?php echo $err_invalid;?></span>
  
  </form>
  
</div>
  </body>
</html>