<?php
foreach($_FILES['myfile']['error'] as $key=>$error){
    if($error == 0){
        $tmp_name = $_FILES['myfile']['tmp_name'][$key];
        $name = $_FILES['myfile']['name'][$key];
        move_uploaded_file($tmp_name, "Botailieu/$name");
    }
}
echo "Upload thành công"."<br>";
?>