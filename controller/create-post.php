<?php
    $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);           
    $post = filter_input(INPUT_POST,"post", FILTER_SANITIZE_STRING);
//create a controller that is going to recieve the input of the title and posts that people post hyn
   echo "<p>Title: $title</p>";
   echo "<p>Post: $post</p>";
//this echos the post and title but doesnt do anything for right now
   
