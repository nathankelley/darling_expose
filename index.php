<?php

// THIS IS THE MAIN CONTROLLER

// Create or access a Session
session_start();

// navigation bar using $classifications array
// $navList = buildNavList($classifications);

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
}

switch ($action) {
    case 'error':
        include 'view/500.php';
        break;

    default:
        include 'view/home.php';
        break;
}


?>