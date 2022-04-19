<?php

require_once 'bd/bd.php';
require_once 'upload.php';
if ( isset( $_POST['post_add'] )){
    $post_title = htmlspecialchars($_POST['post_title']);
    $post_excerpt = htmlspecialchars($_POST['post_excerpt']);
    $post_date = date('Y-m-d H:i:s');
    $post_img_url = "images/uploads/" . $_FILES['post_image']['name'];

    $add_query = $bd_connect->prepare("INSERT INTO posts (post_title, post_excerpt, post_date, post_image) VALUES (?, ?, ?, ?)");

    $add_query->bind_param("ssss", $post_title, $post_excerpt, $post_date, $post_img_url);

    $query_process = $add_query->execute();
    
    if ( $query_process === true){
        $notice = "You have successfully added a post";
    }else{
        $notice = "The error occured, please try again later";
    }
}

require_once 'header.php';
?>
<div class="form-wrapper">
    <h1>Add new post</h1>
    <form class="add-post form" method="POST" enctype="multipart/form-data">
        <label for="post_title">Title</label>
        <input type="text" class="text" name="post_title">
        <label for="post_excerpt">Excerpt</label>
        <input type="textarea" class="text" name="post_excerpt">
        <label for="post_image">Post image</label>
        <input name="post_image" type="file" id="imgInp">
        <img src="" id="imgPrev">
        <input type="submit" class="submit" name="post_add">
    </form>
    <h4>Want to see all posts? <a href="archive-post.php" class="all-posts">Look at them!</a></h4>
    <?php if (!empty($notice)) : echo $notice; endif; ?>
</div>


<?php 
require_once 'footer.php';