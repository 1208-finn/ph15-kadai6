<?php

session_start();

// セッションに保存してあるIDを削除
unset($_SESSION['id']);

setcookie('id', '', time() - 1, '/');

header('Location: ./login.php');
