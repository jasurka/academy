<?php
if ( empty( $bd_connect = new mysqli('localhost', 'root', 'root', 'local') ) ) {
    require_once 'installer.php';
    if ( isset( $db_name ) && isset( $db_user ) && isset( $db_pass ) ) {
        $bd_connect = new mysqli('localhost', $db_user, $db_pass, $db_name);
    }
}


//else{
//    $bd_connect = new mysqli('localhost', 'root', 'root', 'local');
//}