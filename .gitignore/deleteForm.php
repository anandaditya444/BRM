<?php
 $con=mysqli_connect('127.0.0.1','root');
 mysqli_select_db($con,'BRM_DB');
 $q="select * from book";
 $result=mysqli_query($con,$q);
 $num=mysqli_num_rows($result);
 mysqli_close($con);

?>

<!DOCTYPE html>
<html>
   <head>
   	  <title>View Book Records</title>
   	  <link rel="stylesheet" href="viewStyle.css"/>
   </head>
   <body>
   	  <h1>Book Records Management</h1>
        <form action="deletion.php" method="post">
   	  <table id="view-table">
   	  	<tr>
   	  		<th>Book ID</th>
   	  		<th>Title</th>
   	  		<th>Price</th>
   	  		<th>Author</th>
            <th> Select to delete</th>

   	  	</tr>
   	  	<?php
   	  	  for($i=1;$i<=$num;$i++)
   	  	  { $row=mysqli_fetch_array($result);
   	  	  	?>
   	  	  	<tr>
   	  	  		<td><?php echo $row['bookid']; ?></td>
   	  	  		<td><?php echo $row['title']; ?></td>
   	  	  		<td><?php echo $row['price']; ?></td>
   	  	  		<td><?php echo $row['author']; ?></td>
               <td><input type="checkbox" name="b<?php echo $i;?>" value="<?php echo $row['bookid']; ?>" /></td>
   	  	  	</tr>
   	  	  	<?php 

   	  	   } 

   	  	  	
   	  	?>
         <tr><td><input type="submit" value="Delete"/></td></tr>
   	  </table>

        </form>
   </body>

</html>