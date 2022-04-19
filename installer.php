<?php 
error_reporting(0);


if( isset($_POST['db_info_submit']) ) {
    $db_name = $_POST['db_name'];
    $db_user = $_POST['db_user'];
    $db_pass = $_POST['db_pass'];

    $bd_connect = new mysqli('localhost', $db_user, $db_pass, $db_name);
    
    if ( $bd_connect->connect_error != NULL ) {
        $notice = "Incorrect data";
    }else{
        $sql1 = "CREATE TABLE posts (
            post_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            post_title VARCHAR(100),
            post_excerpt LONGTEXT,
            post_date DATETIME
            );";
        $sql2 = "CREATE TABLE academy_users (
            user_id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            user_login VARCHAR(30),
            user_password VARCHAR(30)
            );";
        $sqls = [$sql1, $sql2];

        foreach ($sqls as $k=>$sql) {
            if ( $bd_connect->query($sql) === true){
                $notice = 'Tables are created';
            }else{
                echo 'Error: ' . $bd_connect->error;
            }
        }
            
    }


}

require_once 'header.php';
?>
<div class="form-wrapper">
    <form action="installer.php" method="POST" class="form">
        <input type="text" name="db_name" placeholder="Data Base name">
        <input type="text" name="db_user" placeholder="Data Base user">
        <input type="password" name="db_pass" placeholder="Data Base password">
        <input type="submit" name="db_info_submit">
    </form>
    <div class="notice"><?php if ( !empty( $notice ) ) : echo $notice; echo '<a href="/">View site</a>'; endif; ?></div>
</div>