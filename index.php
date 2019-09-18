<!DOCTYPE html>
<html>
    <head>
        <title>Writer</title>
       
      <script src="https://cdn.ckeditor.com/4.5.6/standard/ckeditor.js"></script>
    

    </head>
    <body>
        <form action="index.php" method="post">
          file name:<input type="text" name="file_name">
            <textarea class="ckeditor"  name="editor"></textarea>
         <input type="submit" value="send" name="send">
        </form>

       <div>


</div>

 </body>
</html>

<?php

if(isset($_POST['send']))
{
  include 'dbconfig.php';
  $text=$_POST['editor'];
  $file=$_POST['file_name'];


   $sql=mysqli_query($db,"INSERT INTO `images`(`file_name`,`ckimg`) VALUES ('$file','$text')");
   if($sql)
   {
    echo "add into db";
   }
   else
   {
    echo "error into db";
   }
}

?>