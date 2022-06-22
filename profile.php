<?php
    include 'connect.php';

    
$sql = "SELECT * FROM client WHERE clientId =2028 LIMIT 1;";
$data = $conn->query($sql);
while($res = $data->fetch_assoc()){
    echo "
    <div class='book'>
      
        <p>"."First Name"." ".":"." ".$res["firstName"]."</p>
        <p>"."Last Name"." ".":"." ".$res["lastName"]."</p>
    
        <p>"."Email"." ".":"."".$res["email"]."</p>
        
        <p>"."Password"." ".":"." ".$res["password"]."</p>
        <p>"."Adress"." ".":"." ".$res["adress"]."</p>
        
    </div>

    
    ";
}
?>