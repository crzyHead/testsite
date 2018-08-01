<!DOCTYPE html>
<html>
    <head>
        <title>Add new post</title>
        <link rel="stylesheet" type="text/css" href="restyle.css">
    </head>
    <body link="#fadase" vlink="#fadase" alink="#fadase">
        <h1>Add new post</h1><h5><a href="index.php">Back to the blog</a></h5>
        <form name="Adding" method="post" action="models/saveprocessor.php">
            <h4>Title:</h4>
            <p><input type="text" name="title" style="background-color: #696969; color: whitesmoke;" required></p>
            <h4>Post:</h4>
            <p><textarea name="posttext" style="font-size: 18pt; height: 10em; width: 30em; resize: none; background-color: #696969; color: whitesmoke;" required></textarea></p>
            <p><input type="submit" text="Add"></p>
        </form>
    </body>
</html>