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
        <title>update</title>
  </head>
  <body>
    <form action="updatedata.php" method="post">
        <table>
		    <tr> 
		       <th>s_no</th>
		       <th>NAME</th>
			   <th>FATHER NAME</th>
			   <th>MOBILE NO</th>
			   <th>EMAIL</th>
			   <th>GENDER</th>
			   <th>COURSE</th>
			</tr>
            <?php
			     for($i=1;$i<$num;$i++)
				 {
					 $row=mysqli_fetch_array($result);
            ?>			
			<tr> 
		       <td><?php echo $row['s_no'];?>
			       <input type="hidden" name="s_no<?php echo $i;?>" value="<?php echo $row['s_no'];?>" /></td>
			   <td><input type="text" name="name<?php echo $i;?>" value="<?php echo $row['NAME'];?>" /></td>
			   <td><input type="text" name="fname<?php echo $i;?>" value="<?php echo $row['FATHER'];?>" /></td>
			   <td><input type="text" name="mobile<?php echo $i;?>" value="<?php echo $row['MOBILE'];?>" /></td>
			   <td><input type="text" name="email<?php echo $i;?>" value="<?php echo $row['EMAIL'];?>" /></td>
			   <td><input type="text" name="gender<?php echo $i;?>" value="<?php echo $row['GENDER'];?>" /></td>
			   <td><input type="text" name="course<?php echo $i;?>" value="<?php echo $row['COURSE'];?>" /></td>
			</tr>
			<?php
			     }
			?>
            <tr>
			    <td><input type="submit" value="submit"/></td>
            </tr>			
		</table>
	</form>	
  </body>
</html>