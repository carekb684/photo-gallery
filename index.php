


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <style>
            div{
                float:left;
                border:solid thin pink;
                margin-left:100px;
            }
        </style>       

            <?php
            foreach (glob("img/Thumbnails/*.jpg") as $filename) {
                
                if(strlen($filename)==27){
                    $filename_string= substr($filename, strlen($filename)-12, 2);
                    
                }
                if(strlen($filename)==26){
                    $filename_string= substr($filename, strlen($filename)-11, 1);
                    
                }
                echo '<div><h1>'."$filename_string".'</h1>';
                
                if(strlen($filename)==27){
                    $filename_temp = substr($filename, strlen($filename)-12,2);
                    $filename_original ="img/Original/" .$filename_temp . ".jpg";
                }
                
                if(strlen($filename)==26){
                   $filename_temp = substr($filename, strlen($filename)-11,1);
                   $filename_original ="img/Original/" .$filename_temp . ".jpg";
                }
                
                    echo "<a href='".$filename_original."'><img src='".$filename."' title='".$filename."'></a>";
                    echo "<p>Text om valpar</p></div>";
                
            }
            ?>

            
            
            
            
            
        



    </body>
</html>
