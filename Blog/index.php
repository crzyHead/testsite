<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <link rel="stylesheet" href="restyle.css">
    </head>
    <body link="#fadase" vlink="#fadase" alink="#fadase">
        <div>
            <h1>My Test Blog</h1>
            <div class="add"><a href="add.php">Add new post</a></div>
            <?php include 'models/loadprocessor.php';
            error_reporting( E_ERROR );
            ?>
            <footer>
                <p>Test blog<br> Copyright &copy 2018</p>      
            </footer>
        </div>
    </body>
</html>