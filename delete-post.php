<?php

require_once 'bd/bd.php';

if ( isset( $_GET['post'] ) ) {
    $post_id = $_GET['post'];
}

$delete_query = $bd_connect->prepare("DELETE FROM posts WHERE post_id=?");

$delete_query->bind_param('i', $post_id);

$delete_result = $delete_query->execute();


header("Location: archive-post.php");

$bd_connect->close();