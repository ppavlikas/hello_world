<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
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
					include ("menu.php"); 
			?>
            <br>
            <br>
            <br>
            <br>
            <form action="result1.php" method="post">
            <label>Choose a student: </label><select name="students">
			
			<?php
            $sql="Select id,onoma from students order by onoma";
			$result = mysqli_query($myDB, $sql);
		while($row = mysqli_fetch_array($result)){
			echo "<option lang='el' value='".$row['id']."'>".$row['onoma']."</option>";
			
		}
			
			?>
			</select>
            <p></p>
            <label>Choose months: </label><p></p>
            <input type="checkbox" name="minas[]" value="January"> January <input type="checkbox" name="minas[]" value="February"> February <input type="checkbox" name="minas[]" value="March"> March <input type="checkbox" name="minas[]" value="April"> April<br>
            <input type="checkbox" name="minas[]" value="May"> May <input type="checkbox" name="minas[]" value="June"> June <input type="checkbox" name="minas[]" value="July"> July <input type="checkbox" name="minas[]" value="August"> August<br>
            <input type="checkbox" name="minas[]" value="September"> September <input type="checkbox" name="minas[]" value="October"> October <input type="checkbox" name="minas[]" value="November"> November <input type="checkbox" name="minas[]" value="December"> December<br>
            
            <p></p>
            <label>Receipt Number: </label><input name="receipt" type="text">
            <p></p>
            <input name="submit" type="submit" value="Add">
            
            </form>
            <?php		
		}?>
</body>
</html>