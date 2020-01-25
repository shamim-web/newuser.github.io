<?php
$name=$_POST['name'];
$fname=$_POST['fname'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$course=$_POST['course'];

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'final');

$q="INSERT INTO data (NAME,FATHER,MOBILE,EMAIL,GENDER,COURSE) values('$name','$fname','$mobile','$email','$gender','$course')";
$status=mysqli_query($con,$q);

?>
<!DOCTYPE html>
<html>
 <head>
      <title>insert</title>
	  <link rel="stylesheet" type="text/css" href="insertstyle.css"/>
 </head>
 <body>
       <h1 id="thanku">THANK YOU</h1>
       <div id="smg">
	   <p>
	      <?php
		     if($status==1)
				   echo "RECORD INSERT";
			   else
			      echo "not insert";
		  ?>
		 </p> 
	    </div> 
	     <div id="ldiv"> <a id="anotherform" href="registration.php">FILL ANOTHER FORM</a> </div>
 </body>
</html>