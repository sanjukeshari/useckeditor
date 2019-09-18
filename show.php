
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

include_once 'dbConfig.php';


$query =mysqli_query($db,"SELECT * FROM images ORDER BY id DESC");


while($row =mysqli_fetch_assoc($query) )
{
?>
    <h1><?php echo $row['ckimg']; ?></h1>


<?php 
} 
?> 

</body>
</html>
