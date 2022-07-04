<?php
// DEFINE SQL SERVER, USER, PASSWORD AND DATABASE
    $db_host = 'localhost'; 
    $db_user = 'root';
    $db_passwd = 'root';
    $db_name = 'outfit';
    
// CHECKING CONNECTION TO SQL SERVER
    $conn = mysql_connect ($db_host,$db_user,$db_passwd);
    $db_select = mysql_select_db($db_name,$conn);
?>