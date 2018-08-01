<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="refresh" content="0.1; url=http://localhost/blog/"> 
    </head>
    <body>
        <?PHP
            $addtitle = $_POST['title'];//title
            $addtext = $_POST['posttext'];//post
            $id = $_POST['id'];
            $і = fopen("C:/xampp/htdocs/Blog/models/Articles/$id.txt","w+"); //открываем файл
            fwrite($і,"\t\t\t<div id=\"$id\" class=\"brdr\"> \n\t\t\t\t<h3>$addtitle</h3>\n\t\t\t\t<p>$addtext"); //записываем всё
            fclose($і); //закрываем
        ?>
    </body> 
</html>