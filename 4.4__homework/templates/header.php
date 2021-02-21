<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require_once ($_SERVER['DOCUMENT_ROOT'] . '/constant.php');
require_once ($_SERVER['DOCUMENT_ROOT'] . '/helpers/mainComponents.php');
require_once ($_SERVER['DOCUMENT_ROOT'] . '/helpers/showMenu.php');



$inputLogin    = '';
$inputPassword = '';
$isAuth        = null;
$showForm      = false;

if(isset($_GET['login']) && strtolower($_GET['login']) == 'yes') {

    $showForm = true; 

} 
 
if (isset($_POST['login'])) {

    $login    = htmlspecialchars($_POST['login']);
    $password = htmlspecialchars($_POST['password']);

    $loginArr    = include $_SERVER['DOCUMENT_ROOT'] .'/include/login.php';
    $passwordArr = include $_SERVER['DOCUMENT_ROOT'] .'/include/password.php';

    $key = array_search($login, $loginArr);

    if ($key !== false && $passwordArr[$key] == $password) {
        $isAuth = true;
    } else {
        $isAuth = false;
        $inputLogin    = $_POST['login'];
        $inputPassword = $_POST['password'];
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="/styles.css" rel="stylesheet">
    <title>Project - ведение списков</title>
    <script src="/js/script.js"></script>
</head>

<body>
     
    <div class="header">
    	<div class="logo"><img src="/i/logo.png" alt="Project"></div>
        <div class="clearfix"></div>
    </div>

    <div class="clear">
        <?=menu\showMenu(menu\arraySort(include DIR_MENU,'title', SORT_DESC))?>
    </div>