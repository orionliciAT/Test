


<html>
    
    <head>
        <title>POSTS</title>
      
        
    </head>
    
    <body>
       POSTS:<br>
        
        <form method="POST" action="posts.php" enctype="multipart/form-data">
           Title:<br>
            <input type="text" name="title"><br><br>
           Description:<br>
            <textarea name="desc"></textarea><br><br>
            <input type="file" name="image"><br><br>
           
            <input type="submit" name="submit" value="POST">
       
        </form>
            
           
            
       
    </body>
    
</html>

<?php
include'connect.php';

if(isset($_POST['submit'])){

$name = $_FILES['image']['name'];
$tmp = $_FILES['image']['tmp_name'];
$type= $_FILES['image']['type'];
$location = 'images/';
$path = $location.$name;
    move_uploaded_file($tmp, $location.$name);
    $title = $_POST['title'];
    $descr = $_POST['desc'];
    $date = date('Y/m/d');
    
    $query = "INSERT INTO posts (title, description, images, date) values('$title','$descr','$path','$date')";
    
    mysqli_query($connection,$query);
     
 
    }
   
?>
