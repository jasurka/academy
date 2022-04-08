<?php

require_once '../bd/bd.php';



if(isset($_POST['register_submit'])){
    $err = [];

    if (!preg_match("/^[a-zA-Z0-9]+$/", $_POST['register_name'])){
        $err[] = 'Login can consist of only latin characters and/or integers'; 
    }

    if (strlen($_POST['register_name']) < 3 || strlen($_POST['register_name'] > 30)){
        $err[] = 'Login name can be more than 3 and less than 30 characters';
    }

    $name_query = mysqli_query($bd_connect, "SELECT user_id FROM academy_users WHERE user_login='" . mysqli_real_escape_string($bd_connect, $_POST['register_name']) . "'");
    
    if( mysqli_num_rows($name_query) > 0 ){
        $err[] = 'User with this username already exists'; 
    } 

    if ( count($err) == 0 ){
        $user_login = $_POST['register_name'];
        $user_password = md5(trim($_POST['register_password']));

        $sql = "INSERT INTO academy_users (user_login, user_password) VALUES ( '" . $user_login . "' , '" . $user_password . "' )";
        
        if ( $bd_connect->query($sql) === TRUE){
            echo 'You have registered successfully';
        } else{
            echo 'Something wrong went';
        }

    } else {
        print "<strong>There is an error occured during registration</strong>";

        foreach ($err as $error){
            print $error . "<br>";
        }
    }

}

$bd_connect->close();

?>
<?php require_once '../head.php'; ?>
     <div class="register-wrapper">   
        <div class="form-heading">Sign up</div>
        <form class="register-form" method="POST">
            <input type="text" class="login modal-input" name="register_name" required>
            <input type="password" class="password modal-input" name="register_password" required>
            <input type="submit" name="register_submit">
        </form>
        <p class="to-log-text">Already have an account? <a href="/login/" class="to-log">Login</a></p>
    </div>
    <style>
    .register-wrapper{
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
    .register-form{
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