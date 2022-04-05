<?php 
function is_logged(){
    $bd_connect = new mysqli('localhost', 'root', 'root', 'local');

    if ( isset( $_COOKIE['id'] ) ) {
        $query = $bd_connect->query("SELECT * FROM academy_users WHERE user_id='".intval($_COOKIE['id'])."'");
        $user_data = mysqli_fetch_assoc($query);
        if( !empty($user_data) ){
            header('Location: /');
        }
    }
}

