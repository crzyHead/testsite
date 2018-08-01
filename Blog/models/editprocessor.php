<!DOCTYPE html>
<html>
    <head>
        <title>Edit post</title>
        <link rel="stylesheet" type="text/css" href="mostnewstyle.css">
    </head>
    <body link="#fadase" vlink="#fadase" alink="#fadase">
        <h1>Edit post</h1>
        <form name="Editing" method="post" action="edit.php">
            <?php 
            $openid = $_GET['id'];
            $openf = "C:/xampp/htdocs/Blog/models/Articles/$openid.txt";
            $ftext = file_get_contents($openf);
            $j = 0;
            $count = $_GET['count'];
            $fcount = $_GET['fcount'];
            $symb = 0; //кол-во символов для заголовка
                for($i = $count; $i < iconv_strlen($ftext, 'UTF-8'); $i++){
                    if($ftext[$i] == "<"){
                        break;
                    }else{
                        $symb++;
                    }
                }
            $tsymb = 0;//кол-во символов для публикации
                for($i = $fcount-1; $i < iconv_strlen($ftext, 'UTF-8'); $i++){
                    if($ftext[$i] == "<"){
                        break;
                    }else{
                        $tsymb++;
                    }
                }
            $title = substr($ftext, $count, $symb);
            $text = substr($ftext, $fcount, $tsymb);
            echo "<p><input type=\"hidden\" name=\"id\" style=\"background-color: #696969; color: whitesmoke;\" value='$openid' required></p>";
            echo "<h4>Title:</h4>";
            echo "<p><input type=\"text\" name=\"title\" style=\"background-color: #696969; color: whitesmoke;\" value='$title' required></p>";
            echo "<h4>Post:</h4>";
            echo "<p><textarea name=\"posttext\" style=\"font-size: 18pt; height: 10em; width: 30em; resize: none; background-color: #696969; color: whitesmoke;\" required>$text</textarea></p>";
            ?>    
            <button name="edit" type="submit">Edit</button>
            <button name="cancel" type="button" onclick="javascript:history.back();">Cancel</button>
            
        </form>
    </body>
</html>