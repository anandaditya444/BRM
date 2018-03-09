<?php
  $size=sizeof($_POST);
  $records=$size/4;
  for($i=1;$i<=$records;$i++)
  {
  	$index1="bookid".$i;
  	$bookid[$i]=$_POST[$index1];
  	$index2="title".$i;
  	$title[$i]=$_POST[$index2];
  	$index3="price".$i;
  	$price[$i]=$_POST[$index3];
  	$index4="author".$i;
  	$author[$i]=$_POST[$index4];
  }

   $con=mysqli_connect('127.0.0.1','root');
   mysqli_select_db($con,'BRM_DB');
   for($i=1;$i<=$records;$i++)
   {
   	$q="update book SET title='title[$i]',price=$price[$i],author='$author[$i]' where bookid=$bookid[$i]";
   	mysqli_query($con,$q);
   }
   mysqli_close($con);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Updation</title>
</head>
<body>
	<h1>Book Records Management</h1>
	<p>
		<?php
		 echo $size." Records Updated";

		?>
		Go back to homepage <a href="home.php">Click Here</a>

</body>
</html>