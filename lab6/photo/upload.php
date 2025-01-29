<?php
require "PDO.php";

if(isset($_FILES['image'])&& $_FILES['image']['error']==0){

    $image=$_FILES['image'];
    $uploadDir='uploads/';
    $uploadFile=$uploadDir.basename($image['name']);
    if(move_uploaded_file($image['tmp_name'],$uploadFile)){
        $sql="insert into images(image_path)values(?)";
        $stmt=  $pdo->prepare($sql);
        $stmt->bind_param("s",$uploadFile);
        if($stmt->execute()){
            echo" تم تحميل الصوره وتخزين المسار بنجاح ".$uploadFile;
        }
        else{

            echo" خطاء في تخزيم المسار ".$stmt->error;
        }
        $stmt->close();
    }else{
        echo"  فشل في تحميل الصوره ";
    }

}else{
    echo" لم يتم تحميل اي صوره ";
}
