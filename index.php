<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>BLOG</title>
        
    </head>
    <body>
        
        
        <?php
        // put your code here Also another change here Change 2
        include 'connect.php';
        
        $query = "SELECT * FROM posts ORDER BY id DESC";
        
        $result = mysqli_query($connection, $query);
        
        while($row=mysqli_fetch_assoc($result)){
            $title = $row['title'];
            $description = $row['description'];
            $image = $row['images'];
            $doc = $row['date'];
             echo $title."<p>";
        echo $description."<p>";
        echo "<img src='".$image."' width='150' height='200'>"."<p>";
        echo $doc."<p>";
        echo "<p>";
            }
         
            ?>
        
       
        <a href="posts.php">MAKE A NEW POST</a>
        
    </body>
</html>

