<?php
require_once './model_z.php';
require_once './db_connect.php';
#require_once 'model_z.php';

function fetchAllBlogPosts()
{
    return showAllBlogPosts();
}

function fetchBlogPost($id)
{
    return showBlogPost($id);
}

if(isset($_POST['submitNewPost'])){
    // Get form data
    $title = $_POST['title'];
    $body = $_POST['body'];
    $author = $_POST['author'];

    if (addBlogPost($title, $author, $body)) {
		//redirect to all posts page
		header('Location: ../showAllBlogPosts.php');
    }
    else{
        echo "Error.";
    }
}

// Check For Edit Submit
if(isset($_POST['submitEdit'])){
    // Get form data
    $update_id = $_POST['update_id'];
    $title = $_POST['title'];
    $body = $_POST['body'];
    $author = $_POST['author'];

    if (updateBlogPost($title, $body, $author, $update_id)) {
		//redirect to the edited post page
		header('Location: ../showBlogPost.php');
    }
    else{
        echo "Error.";
    }

}