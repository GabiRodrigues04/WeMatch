<?php

include "Controllers/GroupsController.php";

$route = str_replace('wematch/app/', '', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

switch($route)
{
    case '/':
        GroupsController::home();
        break;
    

    default:
        echo "Error 404";
        break;
}

?>

<script src="Assets/js/script.js"></script>