<?php
require_once('db_connection.php');
session_start();
if (isset($_GET['controller'])) {
  $controller = $_GET['controller'];
  if (isset($_GET['action'])) {
    $action = $_GET['action'];
  } else {
    $action = 'loginUser';
  }
} else {
  $controller = 'pages';
  $action = 'homepage';
}
require_once('routes.php');
?>