<?php 
try {
    $pdo =  new PDO("mysql:host=localhost;dbname=ariana", "root", "");
    
    // $username = "ariana";
    // $password = password_hash("mypasword",PASSWORD_DEFAULT) ;

    // $sql ="INSERT INTO  users(username,password) VALUES('$username','$password')";
    
    // $sql= "ALTER table users ADD email VARCHAR(255)";

    $sql ="DROP TABLE PRODUTCS";

    $pdo->exec($sql);

    echo "New record created successfully";
    } catch(DOException $e) {
        echo $e->getMessage();
    }

?>