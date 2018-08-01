<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="refresh" content="0.1; url=http://localhost/blog/"> 
    </head>
    <body>
        <?php 
            $deletefile = $_GET['id'];
            unlink("Articles/$deletefile.txt");
            if(file_exists("Comments/$deletefile.txt")){
                unlink("Comments/$deletefile.txt");
            }
        ?>
    </body>