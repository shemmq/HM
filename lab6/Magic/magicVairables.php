<?php
# هي متغيرات يتم تعريفها بطريقه معينه وتستخدم لتوفير معلومات عن الكائنات او السياقات المختلفه  على عكس المتغيرات العاديه فان هذه المتغيرات تعرف مسبقاً في بيئه تؤدي وظائف محدده 
 #this
# يستخدم للاشاره الى الكائن الحالي  داخل الفئه يسمح بالوصول الى الخصائص والطرق الخاصه بالكائن 
// class user{
//     public $name;
//     public function __construct ($name){

//         $this->name=$name;
//     }
//  }
// $user=new user("shaimaa");
// echo $user->name;
// echo "</br>********************</br>";
#########################################################################
#self
# يستخدم للاشاره الى الفئه الحاليه يستخدم عاده للدلاله على الخصائص الثابته والطرق الثابته
// class user{
//     public static $count=0;
//     public function __construct (){
//      self::$count++;
//     }
//     public static function getCount(){
//         return self::$count;
//     }
//  }
// $user=new user();
// echo user::getCount();
// echo "</br>********************</br>";
#########################################################################
#Parent
# يستخدم للاشاره الى الفئه الاصل (الاب) عند الوراثه يستخدم  لاستدعاء الخصائص والطرق من الفئه الاصل 
class Animal{
    public function speak(){
        return "Animal speake";
    }
}
class Dog extends Animal{
    public function speak(){
        return parent ::speak()."and Dog barks";
    }
}
$dog=new Dog();
echo $dog->speak();
echo "</br>********************</br>";
#########################################################################
#static
# يستخدم للاشاره الى الخصائص والطرق الثابته داخل الفئه يستخدم مع الطرق الثابته للوصول الى خصائص الفئه 
class user{
    public static $count=0;
    public function __construct (){
     self::$count++;
    }
    public static function getCount(){
        return self::$count;
    }
 }
$user=new user();
echo user::getCount();
echo "</br>********************</br>";
#########################################################################