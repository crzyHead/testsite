<?PHP
    header('Content-Type: text/html; charset=utf-8');
    if (isset($_POST['nick']) && isset($_POST['email']) && isset($_POST['comment']) ) { 
	    $id = $_POST['id'];
        $nick = $_POST['nick'];
        $email = $_POST['email'];
        $comment = $_POST['comment'];
        if(file_exists("C:/xampp/htdocs/Blog/models/Comments/$id.txt")){
            $text = file_get_contents("C:/xampp/htdocs/Blog/models/Comments/$id.txt");
            $i = fopen("C:/xampp/htdocs/Blog/models/Comments/$id.txt", "r+");
            fwrite($i, "<p id=\"nam\">$nick<sub>$email</sub></p><p id=\"art\">$comment\n$text");
            fclose($i);
        }else{
            $і = fopen("C:/xampp/htdocs/Blog/models/Comments/$id.txt","w+"); //открываем файл
            fwrite($i, "<p id=\"nam\">$nick<sub>$email</sub></p><p id=\"art\">$comment");
            fclose($i);
        }
        $result = file_get_contents("C:/xampp/htdocs/Blog/models/Comments/$id.txt");
    }

    echo json_encode($result); 
        
?>