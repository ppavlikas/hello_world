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
			$onoma=$_POST['onomaT'];
			$id=$_POST['id'];
			
	?>
	<table width="50%" border="1" align="center">
  <tr>
    <td colspan="2" align="center"><h1>Είστε σίγουροι ότι θέλετε να διαγράψετε τον καθηγητή <?php echo $onoma;?>;</h1></td>
    
  </tr>
  <tr>
    <td align="center"><form action="DeleteTeacher.php" method="post"><input name="YES" type="submit" value="YES">
      <input name="id" type="hidden" id="id" value="<?php echo $id;?>">
      
    </form></td>
    <td align="center"><form action="manage_teachers.php" method="post"><input name="NO" type="submit" value="NO"></form></td>
  </tr>
</table>

	<?php }


/*echo "<script>
alert('You deleted lesson ".$lesson."');
window.location.href='index1.php';
</script>" */
 
  ?>				
		
</body>
</html>