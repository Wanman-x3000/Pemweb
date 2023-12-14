<?php
session_start();

if(!isset($_SESSION['data'])){
    $_SESSION['data'] = [];
}
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        echo "hahaha";
        $username = $_POST['username'];
        $pass = $_POST['pass'];
    // var_dump($_SESSION['data']);
      
    foreach ($_SESSION['data'] as $user) {
        if ($user['username'] == $username && $user['pass'] == $pass) {
                  header("Location: home.php");
              exit();
    
            }
        }
  }

?>