<?php
include "app/database/db.php";
include "path.php";


if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $login = trim($_POST['login']);
     $pass = password_hash($_POST['reg_pass'], PASSWORD_DEFAULT);
     $email = trim($_POST['reg_email']);
     $admin = 0;

     $post = [
        'admin' => $admin,
        'username' => $login,
        'email' => $email,
        'password' => $pass
        
     ];

     $id = insert('users', $post);
     $user = selectOne('users', ['id' => $id]);
     $_SESSION['id'] = $user['id'];
     $_SESSION['login'] = $user['username'];
     $_SESSION['admin'] = $user['admin'];
     header('location: ' . BASE_URL);
    //  tt(S_SESSION);
    //  exit();


     
} else{
    $login = '';
    $email = '';
};

