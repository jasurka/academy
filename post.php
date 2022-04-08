<?php

require_once 'bd/bd.php';

if ( isset( $_POST['post_add'] )){
    $post_title = htmlspecialchars($_POST['post_title']);
    $post_excerpt = htmlspecialchars($_POST['post_excerpt']);
    $post_date = date('Y-m-d H:i:s');

    $add_query = $bd_connect->prepare("INSERT INTO posts (post_title, post_excerpt, post_date) VALUES (?, ?, ?)");

    $add_query->bind_param("sss", $post_title, $post_excerpt, $post_date);

    $add_query->execute();
}

require_once 'head.php';
?>
<div class="add-post-wrapper">
    <form class="add-post" method="POST">
    <input type="text" class="text" name="post_title">
    <input type="textarea" class="text" name="post_excerpt">
    <input type="submit" class="submit" name="post_add">
</form>
</div>
