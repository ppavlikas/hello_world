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
			include ("logo.php");
			include ("dbconnection.php");
			
				if($_SESSION["access"]==3)
					include ("menu.php");
					 ?>
					<p></p>
                    <p></p>
                    <p></p><table width="100%" border="0">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<button onclick="myFunction()">Enroll Students</button>
<button onclick="refreshP()">Refresh</button>

<script>
function myFunction() {
    window.open("enrollStudents2.php", "pavps", "height=600,width=600");
}
function refreshP(){
	window.location.reload();	
}
</script>
					<?php $fromUser=$_SESSION["USER"];
			$id=$_POST['class'];
			$_SESSION["classID"] = $id;
			$sql="Select * from student_class  inner join students on students.id=student_class.studentID where classid=".$id;
			
			$result = mysqli_query($myDB, $sql);
			//$row = mysqli_fetch_array($result);
			$sql="Select * from classes where id=".$id;
			$result1 = mysqli_query($myDB, $sql);
			$row1 = mysqli_fetch_array($result1); ?>
            <form action='unenroll.php' method='post'>
            
            <?php
			echo "<table><tr><th>";
			echo "Students for ".$row1['onoma']."</th><th>UnEnroll</th></tr>";
			
		while($row = mysqli_fetch_array($result)){
			echo "<tr><td>".$row['onoma']."</td><td><input name='chk[]' type='checkbox' value='".$row['studentID']."'> </td></tr>";
		}
			echo "</table>";
			
			?>
            
            <input name='class' type='hidden' value="<?php echo $id; ?>">
            <input name='del' type='submit' value='UnEnroll'></form>
            <?php
		}?>
        
</body>
</html>