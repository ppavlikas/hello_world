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
			$onoma=$_POST['onoma'];
			$id=$_POST['id'];
			
	?>
	<table width="50%" border="1" align="center">
  <tr>
    <td colspan="2" align="center"><h1>Are you sure you want to delete Class <?php echo $onoma;?>;</h1></td>
    
  </tr>
  <tr>
    <td align="center"><form action="DeleteClass.php" method="post"><input name="YES" type="submit" value="YES">
      <input name="id" type="hidden" id="id" value="<?php echo $id;?>">
      
    </form></td>
    <td align="center"><form action="updateClass.php" method="post"><input name="NO" type="submit" value="NO"><input name="class" type="hidden" value="<?php echo $id;?>"></form></td>
    
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