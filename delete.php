<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'final');
$q="select * from data";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
mysqli_close($con);


?>

<!DOCTYPE html>
<html>
  <head>
        <title>delete</title>
		<link rel="stylesheet" type="text/css" href="deletestyle.css"/>
  </head>
  <body id="b">
   
    <form action="deletedata.php" method="post" >
        <table id="tab">
		    <tr> 
		       
		       <th>NAME</th>
			   <th>FATHER NAME</th>
			   <th>MOBILE NO</th>
			   <th>EMAIL</th>
			   <th>GENDER</th>
			   <th>COURSE</th>
			   <th>SELECT TO DELETE</th>
			</tr>
            <?php
			     for($i=1;$i<$num;$i++)
				 {
					 $row=mysqli_fetch_array($result);
            ?>			
			<tr> 
		       
			   <td><?php echo $row['NAME']; ?></td>
			   <td><?php echo $row['FATHER']; ?></td>
			   <td><?php echo $row['MOBILE']; ?></td>
			   <td><?php echo $row['EMAIL']; ?></td>
			   <td><?php echo $row['GENDER']; ?></td>
			   <td><?php echo $row['COURSE']; ?></td>
			   <td><input id="ded" type="checkbox" value="<?php echo $row['s_no']; ?>" name="sd<?php echo $i;?>"/></td>
               
			</tr>
			
			
			<?php
			     }
			?>	 
			
			
		</table>
		   
		       <input id="but" type="submit" value="SUBMIT"/>          
		   
    </form>  
   
  </body>
</html>