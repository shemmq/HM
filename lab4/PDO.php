<?php

$host='localhost';//ااعداد معلومات الاتصال للخادم او العنوان 
$username='root';//اسم المستخدم 
$password='';//كلمة السر 
$db='shem_mq';//اسم قاعده البيانات 

try{
//انشاء الاتصال باستخدام pdo
$pdo =new PDO("mysql:host=$host;dbname=$db",$username,$password);
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);//تفعيل استثناءات الاخطاء 

echo"  تم الاتصال بنجاح  ";

}catch(PDOExcaption $e){
    die("فشل في الاتصال :".$e->getMessage());
}
 
