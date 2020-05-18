<?php

print_r($_POST);

if(!empty($_POST)){// if this is a post method and the post data is not empty
    $title = $_POST['title']; // sterilize in production mode
    $content = $_POST['content']; // sterilize in production mode
    $tags = $_POST['tags']; // sterilize in production mode

    if(!empty($tags)){
        $tag_array = explode(',',$tags);
        //print_r($tag_array);

        // now we got the tag array
        
        // transaction start
        // insert the blog post and get the blog post id table_blog_post
        // insert batch all the tags to table_tag
        // add the relationship with blog_post_id and tag_id to table_blog_relate_tag
        // transaction commit or transaction rollback
        
    }
    
}


?>