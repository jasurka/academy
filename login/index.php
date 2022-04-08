<?php
require_once '../check.php';
require_once '../bd/bd.php';

if( is_logged() ){
    return; // можно ли здесь использовать exit() вместо return
}else{
    if (isset($_POST['login-submit'])){

        $username = $_POST['login-name'];
        $user_password = trim( $_POST['login-password'] );


        $query = mysqli_query($bd_connect, "SELECT user_id, user_password FROM academy_users WHERE user_login='".$_POST['login-name']."'");
        $data = mysqli_fetch_assoc($query);

        if( isset( $data ) ){
        
            if ( $data['user_password'] === md5($_POST['login-password']) ){
                setcookie("id", $data['user_id'], time() + 60*60*24, "/");
                setcookie("username", $_POST['login-name'], time() + 60*60*24, "/");
                header('Location: /');
            }else{
                $notice = "Wrong password";
            }
        }else{
            $notice = "There is no user with this login";
        }
    }
}

$bd_connect->close();
?>
<?php require_once '../head.php'; ?>
<div class="login-wrapper">
    <div class="form-heading">Login</div>
    <form class="login-form" method="POST">
        <input type="text" class="login modal-input" name="login-name">
        <input type="password" class="password modal-input" name="login-password">
        <input type="submit" name="login-submit">
    </form>
    <p class="to-reg-text">Do not have an account? <a href="/register/" class="to-reg">Sign Up</a></p>
    <div class="incorrect-pass"><?php if( !empty( $notice ) ) : echo $notice; endif; ?></div>
</div>
