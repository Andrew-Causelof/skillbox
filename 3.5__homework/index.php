<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

define('DIR_SUCCESS', $_SERVER['DOCUMENT_ROOT'] .'/include/success.php');
define('DIR_ERROR', $_SERVER['DOCUMENT_ROOT'] .'/include/error.php');

if(isset($_GET['login']) && strtolower($_GET['login']) == 'yes') {

    $isAuth = false; 

} else {

    $isAuth = null;

}
$inputLogin    = '';
 
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
    <script src="js/script.js"></script>
</head>

<body>

    <div class="header">
    	<div class="logo"><img src="/i/logo.png" alt="Project"></div>
        <div class="clearfix"></div>
    </div>

    <div class="clear">
        <ul class="main-menu">
            <li><a href="#">Главная</a></li>
            <li><a href="#">О нас</a></li>
            <li><a href="#">Контакты</a></li>
            <li><a href="#">Новости</a></li>
            <li><a href="#">Каталог</a></li>
        </ul>
    </div>

	<table  cellspacing="0" cellpadding="0">
    	<tr>
        	<td class="left-collum-index">
			
				<h1>Возможности проекта —</h1>
				<p>Вести свои личные списки, например покупки в магазине, цели, задачи и многое другое. Делится списками с друзьями и просматривать списки друзей.</p>
				
			
			</td>
                <td class="right-collum-index">
                    
                    <div class="project-folders-menu">
                        <ul class="project-folders-v">
                            <li class="project-folders-v-active"><a href="/index.php?login=yes">Авторизация</a></li>
                            <li><a href="#">Регистрация</a></li>
                            <li><a href="#">Забыли пароль?</a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
       
                    <div class="index-auth">
                    <?php  
                        if($isAuth) {

                            include DIR_SUCCESS;
                            $isAuth = null;

                        } elseif ($isAuth === false && isset($inputPassword)) {

                            include DIR_ERROR;
                            
                        } 
                    ?>
                        <?php if($isAuth !== null): ?>   
                        <form action="/?login=yes" method="post">
                            <table  cellspacing="0" cellpadding="0">
                                <tr>
                                    <td class="iat">
                                        <label for="login_id">Ваш e-mail:</label>
                                        <input id="login_id" size="30" name="login" value="<?=$inputLogin?>"> 
                                    </td>
                                </tr>
                                <tr>
                                    <td class="iat">
                                        <label for="password_id">Ваш пароль:</label>
                                        <input id="password_id" size="30" name="password" type="password" value="<?=$inputPassword ?? ''?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="submit" value="Войти"></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                
                </td>
             <?php endif; ?>   

        </tr>
    </table>
    
    <div class="clearfix">
        <ul class="main-menu bottom">
            <li><a href="#">Главная</a></li>
            <li><a href="#">О нас</a></li>
            <li><a href="#">Контакты</a></li>
            <li><a href="#">Новости</a></li>
            <li><a href="#">Каталог</a></li>
        </ul>
    </div>

    <div class="footer">&copy;&nbsp;<nobr>2018</nobr> Project.</div>

</body>
</html>