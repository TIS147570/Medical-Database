<html>
	<head>
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/home2.css">

       


        
	
    </head>
    <body >
       
           
        <div class="title" >User Info
        </div>
         
       

        <div class="dropdown">
            <button class="dropbtn"><i class="fa fa-bars">&nbsp;&nbsp;&nbsp;Menu</i></button>
             <div class="dropdown-content">
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

        <div class="welcome" ><i class="fa fa-user">&nbsp;&nbsp;&nbsp;<?php echo "Welcome User Id:".$_COOKIE["Loggedinuser"];?></i>
        </div>

       

        <div class="text" >Show My Details</br>		<h2>Your ID is <?php echo $_COOKIE["Loggedinuser"];?><br> Your password is <?php echo $_COOKIE["Loggedinpassword"];?><br>You are an <?php echo $_COOKIE["Loggedintype"];?></i>
        </div>


	
	</head>
	<body>
		<h2>Your id is <?php echo $_COOKIE["Loggedinuser"];?><br> Your password is <?php echo $_COOKIE["Loggedinpassword"];?><br>You are a <?php echo $_COOKIE["Loggedintype"];?>
	</body>
</html>