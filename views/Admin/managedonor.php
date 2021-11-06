<?php
    include '../../controllers/donorController.php';
    $donors=getAllDonor();
    session_start();
       if(!isset( $_SESSION["loggedinuser"]))
       {
           header("Location:../login.php");
       }

?>


<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/managedonor.css">
    </head>
    <body>
       
           
        <div class="title" >MEDICAL DATABASE
        </div>
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
        <div class="text" >SEARCH BY BLOODGROUP OR DONOR TYPE</i>
        
        </div>

        <div class="panel">
        <div id="table-wrapper">
        <div id="table-scroll">
		
		<div class="center">
	<input type="text" placeholder="type your search ..." id="search_text" onkeyup="search()" class="form-control">
</div>
<table class="table table-striped center" id="suggestion">

	
</table>
		
        
            <table>
  <tr>
  <th>ID</th>
  <th>Name</th>
  <th>DOB</th>
  <th>GENDER</th>
   <th>BLOOD GROUP</th>
   <th>DONOR TYPE</th>
  <th>PHONE NO</th>
  <th>EMAIL</th>
  <th>ADDRESS</th>
  
  
  </tr>
  <?php
				        foreach($donors as $donor)
				        {
                            echo "<tr>";
                                echo "<td>".$donor["c_id"]."</td>";
                                echo "<td>".$donor["name"]."</td>";
                                echo "<td>".$donor["dob"]."</td>";
                                echo "<td>".$donor["gender"]."</td>";
								 echo "<td>".$donor["bloodgroup"]."</td>";
								 echo "<td>".$donor["type"]."</td>";
                                echo "<td>".$donor["mobile"]."</td>";
                                echo "<td>".$donor["email"]."</td>";
                                echo "<td>".$donor["address"]."</td>";
                               
                                echo '<td><a href="updatedonor.php?id='.$donor["c_id"].'" class="btn1 btn1-success">Edit</a></td>';
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
			xhttp.open("GET","searchdonor.php?key="+text,true);
			xhttp.send();
		}
		else{
			document.getElementById("suggestion").innerHTML="";
		}
		
	}
</script>