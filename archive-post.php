<?php
require_once 'bd/bd.php';

$sql = "SELECT * FROM posts";

$result = $bd_connect->query($sql);

function post_render ( $posts ){ 
    foreach( $posts as $post ){ ?>
        <div class="col-3 post-item">
            <h3 class="post-title">
                <?php if ( !empty( $post['post_title'] ) ) : echo $post['post_title']; endif; ?>
            </h3>
            <p class="post-description">
                <?php if ( !empty( $post['post_excerpt'] ) ) : echo $post['post_excerpt']; endif; ?>
            </p>
            <p class="post-date">
                <?php if ( !empty( $post['post_date'] ) ) : echo $post['post_date']; endif; ?>
            </p>
            <a href="<?php echo 'edit-post.php?post=' . $post['post_id']; ?>" class="edit-post">Edit post</a>
        </div>
    <?php
    }
}

while( $row = $result->fetch_array(MYSQLI_ASSOC) ){
    $rows[] = $row;
}
require_once 'header.php';
?>
<div class="posts-row container row">
    <?php post_render( $rows ); ?>
</div>

<?php


$bd_connect->close();


require_once 'footer.php';