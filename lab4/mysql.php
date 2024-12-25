
<?php
$host="localhost";//اعداد معلومات الاتصال للخادم او عنوان ip 
$username="root";//اسم المستخدم 
$password="";//كلمه السر 
$dbName="shem_mq";//اسم قاعده البيانات

//انشاء الاتصال 
$conn=mysqli_connect($host,$username,$password,$dbName);//انشاء متغير الاتصال 
//التحقق من الاتصال 
if (!$conn){
    die("خطاء في الاتصال ارجوا المحاوله لاحقاً".mysqli_connect_error());//التحقق من الاتصال  حيث تستخدم هذه الداله لايقاف تنفيذ السكريبت مع عرض رساله خطاء
}
else {
    echo"تم الاتصال بنجاح";//

}
//اغلاق الاتصال 
mysqli_close($conn);//




