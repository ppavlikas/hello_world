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
					include ("menutasks.php"); 
		$id=$_GET['data'];
		$sql="select * from tasks where taskID=".$id;
		$result = mysqli_query($myDB, $sql);
		$row1 = mysqli_fetch_array($result);
		$taskS=$row1['taskType'];
		$userS=$row1['toUser'];
		$AFS=$row1['AF'];
		$doaS=$row1['DOA'];
		$docS=$row1['DOC'];
		$CommentS=$row1['Comments'];
		?>
        <br>
        <br>
        <form action="result3.php" method="post">
            <label>Είδος Εργασίας: </label><select name="ttype">
			
			<?php
            $sql="Select * from tasktype order by ttype";
			$result1 = mysqli_query($myDB, $sql);
		while($row = mysqli_fetch_array($result1)){
			if($taskS==$row['ttype'])
			echo "<option lang='el' selected value='".$row['ttype']."'>".$row['ttype']."</option>";
			else
			echo "<option lang='el' value='".$row['ttype']."'>".$row['ttype']."</option>";
			
		}
			
			?>
			</select>
            <p></p>
            <label>Ανάθεση εργασίας στον/στην: </label><select name="fromUser">
			
			<?php
            $sql="Select * from users where username<> '".$_SESSION["USER"]."' order by usurname";
			$result = mysqli_query($myDB, $sql);
			$j=1;
		while($row = mysqli_fetch_array($result)){
			if($userS==$row['username'])
			echo "<option lang='el' selected value='".$row['username']."'>".$row['usurname']." ".$row['uname'] ."</option>";
			else
			echo "<option lang='el' value='".$row['username']."'>".$row['usurname']." ".$row['uname'] ."</option>";
			$j++;
		}
			
			?>
			</select>
            <p></p>
            <?php echo "<label>Αριθμός Φακέλου: </label> <input name='AF' type='text' value='".$AFS."' >" ;
			echo "<p></p>";
            echo "<label>Ημερομηνία Ανάθεσης Εργασίας: </label> <input type='date' name='doa' value='".$doaS."'>";
			echo "<p></p>";
            echo "<label>Ημερομηνία Ολοκλήρωσης Εργασίας: </label> <input type='date' name='doc' value='".$docS."'>";
            echo "<p></p>
            <label>Σχόλια: </label><textarea name='comments' cols='50' rows='10' >".$CommentS."</textarea>";
			echo "<input name='ID' type='hidden' value='".$id."' >" ;
			?>
            <p></p>
            <input name="update" type="submit" value="Διόρθωση">
             <input name="delete" type="submit" value="Διαγραφή">
            </form>
		<?php
		}
		?>
</body>
</html>