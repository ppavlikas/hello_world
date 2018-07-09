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
			
			$student_id=$_POST['student'];
			$sql="Select * from students where id=".$student_id;
			$result = mysqli_query($myDB, $sql);
			$row = mysqli_fetch_array($result);
			
            echo "<br><br><form action='addstudent.php' method='post'>";
            echo "<table border='1px' cellpadding='10' bordercolor=#0dd ><tr><td >";
            echo "<label>Ονοματεπώνυμο Μαθητή: </label><input size=60 name='onoma' type='text' value='".$row['onoma']."'>";
			?>
		
            <p></p><?php
            echo "<label>Ημερομηνία Γέννησης: </label> <input type='date' name='dob' value='".$row['dob']."'>"; ?>
            <p></p>
            <?php 
			echo "<label>Τάξη: </label><input size=10 name='taksi' type='text' value='".$row['taksi']."' >
			<label>Σχολείο: </label><input size=55 name='sxoleio' type='text' value='".$row['sxoleio']."'>
		
            <p></p>
            <label>Ονοματεπώνυμο Μητέρας: </label><input size=59 name='onomaM' type='text' value='.".$row['nameM']."' >
            <p></p>
            <label>Ονοματεπώνυμο Πατέρα: </label><input size=60 name='onomaP' type='text' value='".$row['nameP']."'><p></p>
            <label>Τηλέφωνο Μητέρας: </label><input size=20 name='telM' type='text' value='".$row['phoneM']."'>
			<label>Τηλέφωνο Πατέρα: </label><input size=21 name='telP' type='text' value='".$row['phoneP']."'>
		
            <p></p>
            <label>Διεύθυνση Κατοικίας: </label><input size=63 name='address' type='text' value='".$row['address']."'>
			<p></p>
            <label>Πόλη: </label><input size=30 name='city' type='text' value='".$row['poli']."'>
            <label>Τ.Κ.: </label><input size=10 name='tk' type='text' value='".$row['tk']."'>
			<p></p>
            <label>Email: </label><input size=59 name='email' type='text' value='".$row['email']."'>
            <p></p>
            <label>Comments: </label><textarea name='comments' cols='38' rows='3' value='".$row['comments']."'></textarea>";
			if($row['facebook']==1)
				echo "<input name='facebook' type='checkbox' checked>Facebook";
			else
				echo "<input name='facebook' type='checkbox'>Facebook";
			$sql="Select * from students_lessons where student_id=".$student_id;
			$result = mysqli_query($myDB, $sql);
			//$row = mysqli_fetch_array($result);
			$i=0;
			while($row = mysqli_fetch_array($result)){
				$stCHKL[$i]= $row['lesson'];
				$i++;
			}
			$p=$i;
			$sql="Select * from lessons ";
			$result = mysqli_query($myDB, $sql);
			//$row = mysqli_fetch_array($result);
			//$stLessons= array($row['lesson']);
			?>
            </td>
            <td  valign="top">
            <label><b>Επιλέξτε τα μαθήματα που θέλετε να παρακολουθήσετε:</b> </label><p></p>
            <?php 
			//echo count($stLessons);
			//for($i=0;$i<count($stLessons);$i++){
			while($row = mysqli_fetch_array($result)){
				$flag=0;
				
            for($j=0;$j<$p;$j++){
				
				if($row['lesson']==$stCHKL[$j]){
			echo "<input name='chk[]' type='checkbox' value='".$row['lesson']."' checked>".$row['lesson']." <br> ";
				$flag=1;
				break;
				}
			}
				if($flag==0)
				echo "<input name='chk[]' type='checkbox' value='".$row['lesson']."' >".$row['lesson']." <br> ";
			}
			?>
            
            </td>
            </tr>
            
           </table>
         <br>
            <input name="submit" type="submit" value="Update">
             
</form>
                   <?php
			
		}?>

</body>
</html>