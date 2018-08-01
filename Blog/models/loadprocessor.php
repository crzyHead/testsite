<?php 
error_reporting( E_ERROR );
$dir = "C:/xampp/htdocs/Blog/models/Articles/";
if(is_dir($dir)){
if ($handle = opendir($dir)) {
    while (($file = readdir($handle)) !== false) {
        if ($file != "." && $file != "..") {
            $text = "";
            $openf = "C:/xampp/htdocs/Blog/models/Articles/$file";
            $text = file_get_contents($openf);
          $i = 0;    
          $j = 0;
          $r = 0;
          $count = 0; //количество символов перед текстом заголовка
          $fcount = 0; //количество символов перед основным текстом    
          $symb = 0; //количество символов текста заголовка
          
            for($k = 0; $k < iconv_strlen($text, 'UTF-8'); $k++){
                $count++;
                if($text[$k] == ">")
                {
                    $r++;
                    if($r == 2){
                        echo ">";
                        break 1;
                    }else{
                        echo ">";
                    }
                    
                }else{
                    echo $text[$k];
                }
            }
             $fcount = $count;
             while($j != 1){
                for($i = $count; $i < iconv_strlen($text, 'UTF-8'); $i++){
                if($text[$i] == "<"){
                    echo "</h3>";
                    $fcount += 5;
                    break 2;
                }else{
                    echo $text[$i];
                    $symb++;
                    $fcount++;
                }
                }
            }
            $ffcount = $fcount;
            $fcount += 8;
            $id = substr($file, 0, iconv_strlen($file, 'UTF-8')-4);
            echo "<a href=\"models/deleteprocessor.php?id=$id\">Delete post</a>";
            echo " <a href=\"models/editprocessor.php?id=$id&count=$count&fcount=$fcount\">Edit post</a>";
            if((iconv_strlen($text, 'UTF-8')) <= 300+$fcount){
                for($s = $ffcount; $s < strlen($text); $s++){
                    echo $text[$s];
                }
            }
            else
            {
                for($s = $ffcount; $s < 300+$fcount; $s++){
                    echo $text[$s];
                }
                
            }
            echo "<a href = \"./models/load.php?id=$id\">Read more...</a></div>";
            
   
}}}}
?>