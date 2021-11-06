<?php
    include '../../controllers/PresController.php';
    $donors=getAllPrescription();
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
        <div class="text" >Manage Prescription</i>
        
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
  <th>PRESCRIPTION ID</th>
  <th>DISEASE</th>
  <th>MEDICINE NAME</th>
   <th>MEDICINE POWER</th>
  <th>MEDICINE PRICE</th>
  <th>MEDICINE TIME</th>
  <th>PATIENT ID</th>

  
  
  </tr>
  <?php
				        foreach($donors as $donor)
				        {
                            echo "<tr>";
                                echo "<td>".$donor["PRID"]."</td>";
                               
                                echo "<td>".$donor["DISEASE1"]."</td>";
                                echo "<td>".$donor["MEDNAME"]."</td>";
								 echo "<td>".$donor["MEDPOWER"]."</td>";
                                echo "<td>".$donor["MEDPRICE"]."</td>";
                                echo "<td>".$donor["MEDTIME"]."</td>";
                               echo "<td>".$donor["PAID"]."</td>";
                                echo '<td><a href="updatepres.php?id='.$donor["MEDID"].'" class="btn1 btn1-success">Edit</a></td>';
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
			xhttp.open("GET","searchpres.php?key="+text,true);
			xhttp.send();
		}
		else{
			document.getElementById("suggestion").innerHTML="";
		}
		
	}
</script>