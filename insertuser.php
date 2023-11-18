<?php

include 'User.php';

$user = new User('login', '127.0.0.1', 'root','root');

$user->create('admin','password');
?>