<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <? include_once('./config/config.php'); ?>
    <? include_once('./helper/sqlfunctions.php'); ?>
    <link rel="stylesheet" href="<?= ROOT.'assets/styles/style.css'?>">
    <script src="<?=ROOT.'assets/js/login.js'?>" type="text/javascript"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
</head>

<body bgcolor="#f5f5f5">
<?php

if (isset($_GET['p'])) {
    $page = $_GET['p'];
}else {
    $page = 'home';
}

switch($page){
    case 'home':
        include('./pages/home.php');
        break;
    case 'con_main':
        include('./pages/con_main.php');
        break;
    default:
        echo 'Error 404: Page not found';
        break;
}

?>
</body>

</html>