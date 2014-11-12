<?php
    require_once(__DIR__ . "/../model/config.php");
    //connects your webpage that you linked it to
?>

<h1>Create Blog post</h1>

<form method="post" action="<?php echo $path . "controller/create-post.php"; ?>">
    <div>
        <label for="title">Title: </label>
        <input type="text" name="title" />
    </div>
    
    <div>
        <label for="post">Post: </label>
        <textarea name="post"></textarea>
    </div>
    
    <div>
        <button type="submit">Submit</button> 
        <!--this is for making a submitbutton submit-->
    </div>
</form>
