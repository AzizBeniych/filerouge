<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<form action="" method="post">
    Name:  <input type="text" name="username" /><br />
    Email: <input type="text" name="email" /><br />
    <input type="submit" name="submit" value="Submit me!" />
</form>




<?php

  $Coco = $_POST['email'] ;
if (isset($_POST['submit'])) {

echo "hello"." ".$Coco;
}else {
    echo "hhhhhhhhhhhhhhhhhh";
}
?>
</body>
</html>