<!DOCTYPE html>
<html>
    <head>
        <meta name="shfd27">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
        <title>check upload</title>
    </head>

    <body>
        <?php
        $uploaddir = 'uploads/';
        $uploadfile = $uploaddir . basename(iconv("UTF-8","EUC-KR",$_FILES['userfile']['name']));
        
        echo '<pre>';
        if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)){
            echo "파일이 유효하고, 성공적으로 업로드 되었습니다.\n";
        }
        else{
            echo "파일 업로드 공격의 가능성이 있습니다!\n";
        }

        echo 'debugging info:';
        print_r($_FILES);

        echo "</pre>";
        ?>
    </body>

</html>