<?php
# تستخدم كداله  بناء لانشاء كائن جديد من الفئه وتعيين القيم الاوليه 
//  class user{
//     public $name;
//     public function __construct ($name){

//         $this->name=$name;
//     }
//  }
// $user=new user("shaimaa");
// echo $user->name;
// echo "</br>********************</br>";
#########################################################################
# تستخدم كداله مدمره لتنفيذ الكود عند تدمير الكائن 
// class user{
//     public $name;

//     public function __destruct (){

//        echo" user object is destructed ";
//     }
//  }
// $user=new user();
// echo $user->name;
// echo "</br>********************</br>";
#########################################################################
# تستخدم للوصول الى الخصائص الخاصه او غير الموجوده في الكائن 
//  class user{
//     private  $date=[];
//     public function __get ($name){
//         return $this->date[$name]?? null;

//     }
//  }
// $user=new user();
// echo $user->name;
// echo "</br>********************</br>";
#########################################################################
#  تستخدم لتعيين قيمه لخاصيه غير موجوده او محميه في الكائن 
// class user{
//     private  $date=[];
//         public function __get ($name){
//         return $this->date[$name]?? null;

//     }
//     public function __set($name,$value){
//         $this->date[$name]=$value;
      
//     }
//  }
// $user=new user();
// $user->name="shaimaa Al maqtery";
// echo $user->name;//لكي نحصل على القيمه لابد من استدعاء get 
// echo "</br>********************</br>";
#########################################################################
 # تستخدم لاستدعاء داله غير موجوده او محميه في الكائن 
// class user{

//     public function __call ($name,$arguments){

//      return "the name $name does not exit.";
//     }
//  }
// $user=new user();
// echo $user->someMethod();
// echo "</br>********************</br>";
#########################################################################
# تستخدم لتحويل الكائن الى سلسله نصيه عند محاوله طباعته 
//  class user{
//     public $name;
//     public function __construct ($name){

//         $this->name=$name;
//     }
//     public function __tostring(){
//         return"user:".$this->name;
//     }
//  }
// $user=new user("shaimaa");
// echo $user->name;
// echo "</br>********************</br>";
#########################################################################
# تستخدم لجعل الكائن قابلاً للاستدعاء كداله
//  class user{
    
//     public function __invoke($name){

//       return "hello ,$name!";
//     }
//  }
// $user=new user();
// echo $user("shaima Faroq");
// echo "</br>********************</br>";
#########################################################################
# تنفذ عند استخدامها على خاصيه غير موجوده او غير قابله للوصول
// class Example{
//   private $date=[];
//   public function __isset($name){
//     return isset($this->date[$name]);
//   }
// }
// $exam=new Example();
// var_dump(isset($exam->nonExistentProperty));
#########################################################################
 # تنفذ عند استخدامها على خاصيه غير موجوده وغير قابله للوصول

// class Example{
//   private $date=[];
//   public function __unset($name){
//     unset($this->date[$name]);
//   }
// }
// $exam=new Example();
// unset($exam->nonExistentProperty);
#########################################################################
# تنفذ قبل ان يتم تسلسل الكائن serialize 
# تستخدم لتحديد خصائص التي يجب حفظها

// class Example{
//   private $data="معلومات ";
//   public function __sleep(){
//     return['data'];
//   }
// }
// $exam=new Example();
// $serliazed=serialize($exam);
#########################################################################
# تنفذ عند استرجاع الكائن من التسلسل اي تستخدم لاعاده تهيئه الخصائص 

class Example{
  private $data;
  public function __wakeup(){
   $this->data="تم التهيئه من جديد";
  }
}

$serliazed="0:7:"Example":1:{s:4:"data";s:10:"معلومات";}";
$exam=unserialize($serliazed);
$exam->__wakeup();
#########################################################################
