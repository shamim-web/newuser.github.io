<!DOCTYPE html>
<html>
  <head>
        <title>registration form</title>
		<link rel="stylesheet" type="text/css" href="registrationstyle.css"/>
  </head>
  <body>
     
        
		<div class="div1">
		  <div class="div2">
		  <h1>REGISTRATION FORM</h1>
 		   <form action="insert.php" method="post">
		      <table>
			         <tr>
					     <th>NAME</th>
						 <td><input type="text" name="name" required /></td>
					 </tr>
					 <tr>
					     <th>FATHER NAME</th>
						 <td><input type="text" name="fname" required /></td>
					 </tr>
					 <tr>
					     <th>MOBILE N0</th>
						 <td><input type="text" name="mobile" required /></td>
					 </tr>
					 <tr>
					     <th>EMAIL</th>
						 <td><input type="text" name="email" required /></td>
					 </tr>
					 <tr>
					     <th>GENDER</th>
						 <td><input type="text" name="gender"/></td>
					 </tr>
					 <tr>
					     <th>COURSE</th>
						 <td><input type="text" name="course" required /></td>
					 </tr>
					 
					 
						 
					 
			  </table>
			  <input id="button" type="submit" name="submit"/>
            </form>
		  </div>
        </div>		
 </body>
</html>