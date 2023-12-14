<?php
session_start();

if(!isset($_SESSION['data'])){
    $_SESSION['data'] = [];
}
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        echo "wkwkwk";
    
        $username = $_POST['username'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $konfirm_pass = $_POST['konfirm_pass'];
        // foreach ($_SESSION['data'] as $user) {
        //     if ($user['username'] == $username) {
        //     echo "Username sudah ada.";
        //     break;
        //     }
        // }
        if ($pass != $konfirm_pass) {
            echo "Password tidak sama";
        } else{
            $users = [];
            $users = ["username" => $username,
                        "email" => $email,
                        "pass" => $pass,];
            var_dump($_SESSION['data']);
            array_push($_SESSION['data'], $users);
            echo "<script>Pendaftaran Akun berhasil !</script>";
            header("Location: login.html");
            exit;
        }
}
?>