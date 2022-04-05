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
            header('Location: /');
        }else{
            print "Wrong password";
        }
    }
}

$bd_connect->close();
?>
<?php require_once 'head.php'; ?>
<div class="login-wrapper">
    <div class="form-heading">Login</div>
    <form class="login-form" method="POST">
        <input type="text" class="login modal-input" name="login-name">
        <input type="password" class="password modal-input" name="login-password">
        <input type="submit" name="login-submit">
    </form>
</div>
<style>
    .login-wrapper{
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
    }
    .form-heading{
        font-size: 28px;
        margin-bottom: 20px;
    }
    .login-form{
        display: flex;
        flex-direction: column;
        width: 100%;
        gap: 10px;
    }
    input{
        border: 1px solid #333;
        border-radius: 8px;
        font-size: 18px;
        padding: 8px;
    }
    input[type="submit"]{
        background-color: #0d41ff;
        color: #fff;
        border: none;
    }
</style>