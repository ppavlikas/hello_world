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
					include ("menutasks.php"); ?>
             <br>
              <br>
              <br>
              <br>
              <br>
              <br>
            
             <form action="assigntask1.php" method="post">
            <label>Είδος Εργασίας: </label><select name="ttype"><?php
            $sql="Select * from tasktype order by ttype";
			$result = mysqli_query($myDB, $sql);
		while($row = mysqli_fetch_array($result)){
			echo "<option lang='el' value='".$row['ttype']."'>".$row['ttype']."</option>";
			
		}
			
			?>
			</select>
            <p></p>
            <label>Ανάθεση στον/στην: </label><select name="fromUser"><?php
            $sql="Select * from users where username<> '".$_SESSION["USER"]."' order by usurname";
			$result = mysqli_query($myDB, $sql);
			$j=1;
		while($row = mysqli_fetch_array($result)){
			echo "<option lang='el' value='".$row['username']."'>".$row['usurname']." ".$row['uname'] ."</option>";
			$j++;
		}
			
			?>
			</select>
			<p></p>
            <label>Αριθμός Φακέλου: </label> <input name="AF" type="text">
            <p></p>
            <label>Ημερομηνία Ανάθεσης Εργασίας: </label> <input type="date" name="doa">
            <p></p>
            <label>Ημερομηνία Ολοκλήρωσης Εργασίας: </label> <input type="date" name="doc">
            <p></p>
            <label>Σχόλια: </label><textarea name="comments" cols="50" rows="10"></textarea>
            <p></p>
            <input name="submit" type="submit" value="Υποβολή Εργασίας">
             </form>       
					
	<?php	}
					?>
</body>
</html>