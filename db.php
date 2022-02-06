<?php
    $servername='localhost';
    $username='root';
    $password='3498';
    $dbname = "techie";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
?>