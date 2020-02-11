<?php 
require __DIR__ .'/bootstrap.php';

if (!isset($_SESSION)) {
    session_start();
}
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP7-mini-app (CRUD application)</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="resources/css/index.css" />
</head>
<body>
    <a href='index.php?page=example'>Go to example page</a> 
   <?php
    //include templates
    $page = $_GET['page'] ?? 'example';

    switch ($page) {
        case 'example':
             include 'pages/example_page.php';
        break;

        default:
             include 'pages/example_page.php';
        break;
    }

   ?>
</body>
</html>