<?php
 $title=$_POST['title'];
 $price=$_POST['price'];
 $author=$_POST['author'];
 $con=mysqli_connect('127.0.0.1','root');
 mysqli_select_db($con,'BRM_DB');
 $q="INSERT INTO BOOK(title,price,author) values('$title',$price,'$author')";
 $status=mysqli_query($con,$q);
 mysqli_close($con);

?>

<!DOCTYPE html>
<html>
   <head>
       <title> Insertion</title> 
   	</head>
   	<body>
   		<h1>Book Record Management</h1>
   		<p>
   			<?php
   			 if($status==1)
   			 	echo "Record Inserted";
   			 else
   			 	echo "Insertion Denied";
   			?>
   		</p>
   		<h4> Do you want to insert more record?</h4>
   		<a href="insertform.php">Click Here</a>
   		<h4> Go back to homepage</h4>
   		<a href="home.php">Click Here</a>
   	</body>

</html>