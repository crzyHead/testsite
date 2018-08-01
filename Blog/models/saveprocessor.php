<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="refresh" content="0.1; url=http://localhost/blog/"> 
    </head>
    <body>
        <?PHP
            $addtitle = $_POST['title'];//title
            $addtext = $_POST['posttext'];//post
            $dt = date("l dS \of F Y His");
            
            $і = fopen("C:/xampp/htdocs/Blog/models/Articles/$dt.txt","w"); //открываем файл
            $id = $dt;
            fwrite($і,"\t\t\t<div id=\"$id\" class=\"brdr\"> \n\t\t\t\t<h3>$addtitle</h3>\n\t\t\t\t<p>$addtext\n\t\t\t\n"); //записываем всё
            fclose($і); //закрываем
        ?>
    </body> 
</html>