<html>
    <head>
        <title>basic form</title>
    </head>
    <body>
        <p><h2>Please input your name :</h2></p>
       <form method="POST">
        <input type="text" name ="name">
        <input type="submit" value="submit">
       </form>
       <?php
      $name= $_POST['name'];
      echo "your name is :". $name; 
       ?>
    </body>
</html>