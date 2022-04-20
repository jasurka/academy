<?php
error_reporting(0);
function upload_file(){
    if ( isset($_FILES['post_image']) ) {
        $file_name = $_FILES['post_image']['name'];
        $file_size = $_FILES['post_image']['size'];
        $file_tmp = $_FILES['post_image']['tmp_name'];
        $file_type = $_FILES['post_image']['type'];
        $file_ext = strtolower( end( explode( '.', $_FILES['post_image']['name'] ) ) );

        $allowed_ext = ['jpeg', 'jpg', 'png'];

        if( in_array( $file_ext, $allowed_ext ) === false ) {
            $notice[] = "Extension is not allowed";
        }
        if ( $file_size > 2097152) {
            $notice[] = "File size should be less than 2MB";
        }
        if ( empty( $notice ) === true ) {
            move_uploaded_file( $file_tmp, "images/uploads/" . $file_name );
            $post_img_url = "images/uploads/" . $file_name;
            return $post_img_url;
        }else{
            return $notice;
        }
    }
}

?>