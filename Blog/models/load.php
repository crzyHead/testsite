<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Article</title>
        <link rel="stylesheet" href="mostnewstyle.css">
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script src="ajax.js"></script>
    </head>
    <body link="#fadase" vlink="#fadase" alink="#fadase">
        <div>
            
            <div class="home">
                <a onclick="javascript:history.back()">Back to the blog</a>
            </div>
            <?php 
                $openid = $_GET['id'];
                $openf = "C:/xampp/htdocs/Blog/models/Articles/$openid.txt";
                $text = file_get_contents($openf);
                echo $text;
                echo "<p><input type=\"hidden\" name=\"id\" style=\"background-color: #696969; color: whitesmoke;\" value='$openid' form=\"Adding\"></p>";
            ?>
            <div id="comments">
                <h3>Add your comment</h3>
                <form id="Adding" method="post" action="">
                    <h4>Nickname:</h4>
                    <p><input type="text" name="nick" style="background-color: #696969; color: whitesmoke;" required></p>
                    <h4>Mail:</h4>
                    <p><input type="email" name="email" style="background-color: #696969; color: whitesmoke;" required></p>
                    <h4>Comment:</h4>
                    <p><textarea name="comment" style="font-size: 18pt; height: 10em; width: 30em; resize: none; background-color: #696969; color: whitesmoke;" required></textarea></p>
                    <p><input type="button" id="btn" value="Enter"></p>
                </form>
                
                <div id="commentsF">
                    <?php 
                        if(file_exists("C:/xampp/htdocs/Blog/models/Comments/$openid.txt") && filesize("C:/xampp/htdocs/Blog/models/Comments/$openid.txt") != 0){
                            echo file_get_contents("C:/xampp/htdocs/Blog/models/Comments/$openid.txt");
                        }else{
                            echo "<h2>Be the first to leave the comment!</h2>";
                        }
                    ?>
                </div>
            </div>
            <footer>
                <p>Test blog<br> Copyright &copy 2018</p>      
            </footer>
        </div>
    </body>
</html>