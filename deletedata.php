<?php
$size=sizeof($_POST);
$j=1;
for($i=1;$i<=$size;$i++,$j++)
{
	$index="sd".$j;
	if(isset($_POST[$index]))
	     $s_no[$i]=$_POST[$index];	
	 else
		 $i--;
}
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'final');

  for($k=1;$k<=$size;$k++)
   {
	  $q="delete from data where s_no=".$s_no[$k];
	  mysqli_query($con,$q);
   }
   mysqli_close($con);
?>
<!DOCTYPE html>
<html>
 <head>
      <title>delete data</title>
	  <link rel="stylesheet" type="text/css" href="deletestyle.css"/>
 </head>
 <body id="b">
      
	   <p>
	      <?php
				   echo $size."record delete";
		  ?>
	   </p>
	     
 </body>
</html>