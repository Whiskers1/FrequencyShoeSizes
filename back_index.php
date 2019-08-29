<?php

require_once 'database.php';

if (isset($_POST['Submit'])){
    addUser($_POST['Name'],$_POST['Email'],$_POST['Age'],$_POST['Shoe']);
    header("Location:index.php");
    exit();
}



function addUser($name, $email, $age, $shoe_size){
    $db_conn = new Database();
    $db_conn->connect();

    $shoe_size = str_replace(',', '.', $shoe_size);

    $query = 'INSERT INTO users (name, email, age, shoe_size) VALUES ("'.$name.'", "'.$email.'", '.$age.', '. $shoe_size.');';
    $result = mysqli_query($db_conn->myconn, $query);

}