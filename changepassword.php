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
				if($_SESSION["access"]==3)
					include ("menuchangepassword.php");
					?>
          <br>
          <br>
        <p></p>
          <form action="changepass.php" method="post">
          <label>Νέος κωδικός: </label><input name="newpass" type="password">
          <br>
          <input name="newpass1" type="submit" value="Αλλαγή Κωδικού">
          </form>
          
        <?php            
		}
		?>
</body>
</html>