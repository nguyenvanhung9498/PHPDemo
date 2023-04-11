<?php
include_once 'Controller/login.php';
include_once 'Controller/crud.php';
use Controller\Login;
use Controller\CRUD;
$url = $_REQUEST['url'];
$method = $_SERVER['REQUEST_METHOD'];
switch ($url) {
    case 'login':
        if ($method == 'GET')
            include_once 'View/login.php';
        if ($method == 'POST') {
            $login = new Login();
            $login->checkLogin();
        }
        break;
    case 'list-task':
        if ($method == 'GET')
            include_once 'View/list-task.php';
        break;
    case 'insert':
        $crud = new CRUD();
        $crud ->insertTask();
        include_once 'Controller/crud.php';
        break;
    case 'crud':
        include_once 'View/insert.php';
        break;
    case 'error':
        echo 'error';
        break;
    default:
        include_once 'View/login.php';
}
