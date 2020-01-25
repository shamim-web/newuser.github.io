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
        <title>view data</title>
		<link rel="stylesheet" type="text/css" href="viewstyle.css"/>
  </head>
  <body id="bbb">
    <div id="tdiv">
        <table id="t">
		    <tr> 
		       
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
		       
			   <td><?php echo $row['NAME']; ?></td>
			   <td><?php echo $row['FATHER']; ?></td>
			   <td><?php echo $row['MOBILE']; ?></td>
			   <td><?php echo $row['EMAIL']; ?></td>
			   <td><?php echo $row['GENDER']; ?></td>
			   <td><?php echo $row['COURSE']; ?></td>
			</tr>
			<?php
			     }
			?>	 
		</table>
		
    </div>
  </body>
</html>