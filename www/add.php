<?php

require __DIR__.'/functions/file.php';
require __DIR__.'/model/function.php';

if (!empty($_POST)) {
    $data = [];
    if (!empty($_POST['title'])){
        $data['title']=$_POST['title'];
    }
    if (!empty($_FILES)){
        $res=File_upload('image');
        if (false !== $res){
            $data['image']=$res;
        }
    }

    if(isset($data['title']) && isset($data['image'])){
        Photo_insert($data);
        header('Location: /');
        die;
    }

        var_dump($data);die;
}

include __DIR__.'/view/add.php';