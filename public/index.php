<?php
require_once __DIR__ . '/../config/bootstrap.php';

$pathInfo = substr($_SERVER['REQUEST_URI'], strlen($_SERVER['BASE']));
if (strpos($pathInfo, '?')) {
    $pathInfo = substr($pathInfo, 0, strpos($pathInfo, '?'));
}
if (strpos($pathInfo, '#')) {
    $pathInfo = substr($pathInfo, 0, strpos($pathInfo, '#'));
}

switch ($pathInfo) {
    case '/':
    case '':
        (new \Controller\DefaultController())->homepageAction();
        return;
    case '/update':
        (new \Controller\DefaultController())->updateAction();
        return;
    case '/delete':
        (new \Controller\DefaultController())->deleteAction();
        return;
    case '/create':
        (new \Controller\DefaultController())->createAction();
        return;
    default:
        include __DIR__ . '/../view/404.html';
}
