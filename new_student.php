<?php session_start(); ?>
<!doctype html>

<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style> 
div {border-color: #92a8d1;}
</style>
</head>

<body>
<?php 
		if($_SESSION["loggedin"]!=1){
			echo "Πρέπει να συνδεθείτε";
			include ("login.php");	
		}
		else{
			include ("logo.php");
			include ("dbconnection.php");
			
				if($_SESSION["access"]==3)
					include ("menu.php"); ?>
             <br>
              <br>
              <br>
              <br>
              <br>
              <br>
            
             <form action="addstudent.php" method="post">
            <table border="1px" cellpadding="10" bordercolor=#0dd ><tr><td >
            <label>Ονοματεπώνυμο Μαθητή: </label><input size=60 name="onoma" type="text">
			
		
            <p></p>
            <label>Ημερομηνία Γέννησης: </label> <input type="date" name="dob">
            <p></p>
            <label>Τάξη: </label><input size=10 name="taksi" type="text">
			<label>Σχολείο: </label><input size=55 name="sxoleio" type="text">
		
            <p></p>
            <label>Ονοματεπώνυμο Μητέρας: </label><input size=59 name="onomaM" type="text">
            <p></p>
            <label>Ονοματεπώνυμο Πατέρα: </label><input size=60 name="onomaP" type="text"><p></p>
            <label>Τηλέφωνο Μητέρας: </label><input size=20 name="telM" type="text">
			<label>Τηλέφωνο Πατέρα: </label><input size=21 name="telP" type="text">
		
            <p></p>
            <label>Διεύθυνση Κατοικίας: </label><input size=63 name="address" type="text">
			<p></p>
            <label>Πόλη: </label><input size=30 name="city" type="text">
            <label>Τ.Κ.: </label><input size=10 name="tk" type="text">
			<p></p>
            <label>Email: </label><input size=59 name="email" type="text">
            <p></p>
            <label>Comments: </label><textarea name="comments" cols="38" rows="3"></textarea> <input name="facebook" type="checkbox">Facebook
            </td>
            <td  valign="top">
            <label><b>Επιλέξτε τα μαθήματα που θέλετε να παρακολουθήσετε:</b> </label><p></p>
            <?php
			$sql="Select * from lessons ";
			$result = mysqli_query($myDB, $sql);
			//$row = mysqli_fetch_array($result);
			while($row = mysqli_fetch_array($result)){
				echo "<input name='chk[]' type='checkbox' value='".$row['lesson']."' >".$row['lesson']." <br> ";
			}
			?>
            
            </td>
            </tr>
            
           </table>
         <br>
            <input name="submit" type="submit" value="Add Student">
             
</form>
                    
					
	<?php	}
					?>
</body>
</html>