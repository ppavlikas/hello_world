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
			$lesson=$_POST['lesson'];
			$urlBack=$_POST['urlBack'];
			$urlDelete=$_POST['urlDelete'];
	?>
	<table width="50%" border="1" align="center">
  <tr>
    <td colspan="2" align="center"><h1>Είστε σίγουροι ότι θέλετε να διαγράψετε το μάθημα <?php echo $lesson;?>;</h1></td>
    
  </tr>
  <tr>
    <td align="center"><form action="<?php echo $urlDelete?>" method="post"><input name="YES" type="submit" value="YES">
      <input name="id" type="hidden" id="id" value="<?php echo $lesson?>">
      <input type="hidden" name="url" id="url">
    </form></td>
    <td align="center"><form action="<?php echo $urlBack?>" method="post"><input name="NO" type="submit" value="NO"></form></td>
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