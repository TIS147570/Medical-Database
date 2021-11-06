<?php
    include '../../controllers/TestController.php';
    $users=getAllTest();
    session_start();
       if(!isset( $_SESSION["loggedinuser"]))
       {
           header("Location:../login.php");
       }

?>


<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/manageuser.css">
    </head>
    <body>
       
           
        <div class="title" >Manage TEST
        </div>
         
        <div class="dropdown">
            <button class="dropbtn"><i class="fa fa-bars">&nbsp;&nbsp;&nbsp;Menu</i></button>
                <div class="dropdown-content">
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
        <div class="text" >Manage TEST</i>
        
        </div>

        <div class="panel">
        <div id="table-wrapper">
        <div id="table-scroll">
		
		<div class="center">
	<input type="text" placeholder="type your search ..." id="search_text" onkeyup="search()" class="form-control">
</div>
<table class="table table-striped center" id="suggestion">
        
            <table>
  <tr>
  <th>ID</th>
  <th>TEST NAME</th>
  <th>TEST TYPE</th>
  <th>TEST DATE</th>
  
  <th>RESULT</th>
  <th>OBSERVATIONR</th>
  <th>PATIENT ID</th>
  <th>ASSISTANT ID</th>
   <th>DOCTOR ID</th>
  
  </tr>
  <?php
				        foreach($users as $user)
				        {
                            echo "<tr>";
                                echo "<td>".$user["MT_ID"]."</td>";
                                echo "<td>".$user["MT_NAME"]."</td>";
                                echo "<td>".$user["MT_TYPE"]."</td>";
                                echo "<td>".$user["MT_DATE"]."</td>";
								  echo "<td>".$user["MT_RESULT"]."</td>";
                                echo "<td>".$user["MT_OBSERVATION"]."</td>";
                                echo "<td>".$user["PA_ID"]."</td>";
                                echo "<td>".$user["A_ID"]."</td>";
                               echo "<td>".$user["D_ID"]."</td>";
                                echo '<td><a href="updattest.php?id='.$user["PA_ID"].'" class="btn1 btn1-success">Edit</a></td>';
                            echo "</tr>";
				        }
                    ?>
             

  
        </table>
    </div>
    </div>
    </div>

    
      



       
                
        
        

       
        
      
        

        
    </body>
</html>



<script>
	function get(id){
		return document.getElementById(id);
	}
	function fill_suggest(td){
		get("search_text").value= td.innerHTML;
		
	}
	function search(){
		var text = get("search_text").value;
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange=function(){
			if(this.readyState == 4 && this.status == 200 ){
				document.getElementById("suggestion").innerHTML = this.responseText;
			}
		};
		if(text){
			xhttp.open("GET","searchtest.php?key="+text,true);
			xhttp.send();
		}
		else{
			document.getElementById("suggestion").innerHTML="";
		}
		
	}
</script>