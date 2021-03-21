<?php
session_start();
$_SESSION["user"]=null;
//TODO この行は消しましょう。:済
// echo $_SESSION["user"];
header('Location: login.php');
session_destroy();