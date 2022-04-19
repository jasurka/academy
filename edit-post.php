<?php
require_once 'bd/bd.php';
require_once 'upload.php';

if ( isset( $_GET['post'] ) ) {
    $post_id = $_GET['post'];
}

//new data
if( !empty( $_POST['post_update'] ) ) {
    if ( isset( $_POST['new_post_title'] ) ) : $new_post_title = htmlspecialchars($_POST['new_post_title']); endif;
    if ( isset( $_POST['new_post_excerpt'] ) ) : $new_post_excerpt = htmlspecialchars($_POST['new_post_excerpt']); endif;
    $new_img_url = "images/uploads/" . $_FILES['post_image']['name'];

    $edit_query = $bd_connect->prepare("UPDATE posts SET post_title=?, post_excerpt=?, post_image=? WHERE post_id=?");

    $edit_query->bind_param('sssi', $new_post_title, $new_post_excerpt, $new_img_url, $post_id);

    $update_query = $edit_query->execute();

    if ( $update_query === true ){
        $notice = "You have successfully edited the post";
    }else{
        $notice = "Something went wrong, try again later";
    }
}

//data for form
$post_info_sql = "SELECT * FROM posts WHERE post_id=" . $post_id . "";

$post_info_query = $bd_connect->query($post_info_sql);

$post_info = $post_info_query->fetch_array(MYSQLI_ASSOC);


require_once 'header.php';
?>

<div class="form-wrapper">
    <form class="edit-post-form form" method="POST" enctype="multipart/form-data">
        <label for="new_post_title">Title</label>
        <input id="new_post_title" type="text" name="new_post_title" value="<?php echo $post_info['post_title']; ?>">
        <label for="new_post_excerpt">Excerpt</label>
        <input id="new_post_excerpt" type="text" name="new_post_excerpt" value="<?php echo $post_info['post_excerpt']; ?>">
        <label for="post_image">Post image</label>
        <img src="<?php if ( !empty( $post_info['post_image'] ) ) : echo $post_info['post_image']; endif; ?>" id="imgPrev"">
        <input name="post_image" type="file" id="imgInp">
        <input type="submit" class="submit" name="post_update" value="Update">
    </form>
    <a href="archive-post.php" class="archive">Return to archive</a>
</div>
   

<?php
$bd_connect->close();
require_once 'footer.php';