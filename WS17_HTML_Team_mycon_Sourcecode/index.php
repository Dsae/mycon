<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <? include_once('./config/config.php'); ?>
    <? include_once('./config/dbconfig.php'); ?>
    <? include_once('./helper/dbconnect.php'); ?>
    <? include_once('./helper/sqlfunctions.php'); ?>
    <link rel="stylesheet" href="./assets/styles/style.css"  media="screen and (min-width: 501px)">
    <link rel="stylesheet" href="./assets/styles/style_low_resolution.css"  media="screen and (max-width: 500px)">
    <script src="./assets/js/login.js" type="text/javascript"></script>
    <script src="./assets/js/header.js" type="text/javascript"></script>
    <script src="./assets/js/carousel.js" type="text/javascript"></script>
    <script src="./assets/js/main.js" type="text/javascript"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
</head>

<body bgcolor="#f5f5f5">

<? include("./pages/header.php"); ?>

<?

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

<? include("./pages/footer.php"); ?>

</body>

</html>