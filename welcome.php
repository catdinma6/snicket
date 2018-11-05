<!DOCTYPE html>
<html>
<head>
    <title>
    
    </title>
</head>  
    
<body>
  welcome <?php echo $_POST["name"]; ?> <br>
    Your email address is: <?php echo $_POST["email"]; ?>
    
     <?php 
       $name="";
       if($_SERVER["REQUEST_METHOD"]=="POST"){
       $name= test_input($_POST["name"]);
       }
       function test_input($data){
       $data = htmlspecialchars($data);
       return $data;
       }
    ?>
    
    
    
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST"><br>
       Name: <input type="text" name="name" value="<?php echo $name;?>"><br>
       Email: <input type="text" name="email"><br>
       <input type="submit">
    <?php   
    echo "<h1>Output</h1>";
    echo $name ."<br>"
     ?>  
   </form>
</body>
</html>