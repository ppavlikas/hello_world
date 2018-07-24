<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Documents</title>
</head>

<body>

<?php 
		if($_SESSION["loggedin"]!=1){
			echo "Πρέπει να συνδεθείτε";
			include ("login.php");	
		}
		else{
			//include ("logo.php");
			include ("dbconnection.php");
			
				if($_SESSION["access"]==3)
					//include ("menu.php");
					$id=$_SESSION["classID"]; ?>
					<p></p>
                    <p></p>
                    <p></p><table width="100%" border="0">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Choose students to enroll</strong></td>
    <td>&nbsp;</td>
  </tr>
</table>

			<?php 
			$sql="Select * from students order by onoma";
			$result = mysqli_query($myDB, $sql);
			//$row = mysqli_fetch_array($result);
			 ?>
            <form action='enroll.php' method='post'>
            
            <?php
			echo "<table border='1'><tr><th>";
			echo "Student </th><th>Enroll</th></tr>";
			
		while($row = mysqli_fetch_array($result)){
			echo "<tr><td>".$row['onoma']." - ".$row['nameP']."</td><td><input name='chk[]' type='checkbox' value='".$row['id']."'> </td></tr>";
		}
			echo "</table>";
			
			?>
            
            <input name='class' type='hidden' value="<?php echo $id; ?>">
            <input name='del' type='submit' value='Enroll'></form>
            <?php
		}?>
        
</body>
</html>