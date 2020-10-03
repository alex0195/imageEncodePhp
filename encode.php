<?php
if($_FILES['photo']['name']!=""){
    $imagen = file_get_contents($_FILES['photo']['tmp_name']);
    $imageData = base64_encode($imagen);
    $res = 'data:'.$_FILES['photo']['type'].';base64,'.$imageData;
    $data = array('image'=>$res);
    echo json_encode($data);
}