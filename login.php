<?php
require_once 'check.php';
require_once 'bd/bd.php';

if( is_logged() ){
    return;
}else{
    if (isset($_POST['login-submit'])){
        $query = mysqli_query($bd_connect, "SELECT user_id, user_password FROM academy_users WHERE user_login='".$_POST['login-name']."'");
        $data = mysqli_fetch_assoc($query);
        if ( $data['user_password'] === md5($_POST['login-password']) ){
            setcookie("id", $data['user_id'], time() + 60*60*24, "/");
            setcookie("username", $_POST['login-name'], time() + 60*60*24, "/");
            is_logged();
        }else{
            print "Wrong password";
        }
    }
}


    

$bd_connect->close();
?>

                    <div class="form-heading">Login</div>
                    <form class="login-form" method="POST">
                        <input type="text" class="login modal-input" name="login-name">
                        <input type="password" class="password modal-input" name="login-password">
                        <input type="submit" name="login-submit">
                    </form>