<!DOCTYPE html>
<html lang="en">
<head>
<title> Shaima'a Almaqtery</title>
<style>
body{
    background-color: antiquewhite;

}
</style>
</head>
<body >
<h1><?php
 echo "<div style='color: black;  text-align: center;border: 8px salmon ridge; box-shadow: 10px 10px 9px rgb(174, 174, 162);'> &#34تعريف المتغيرات</div>";
?></h1>
<?php
#عدم اسناد قيمة ابتدائيه للمتغير
$var1;
echo"<h1 style='color: salmon;  text-align: left;'> INTEGER:</h1>";
$var2=22;
 var_dump($var2);
echo"</br></br>**********************************************************";

echo"<h1 style='color: salmon;  text-align: left;'> FLOAT:</h1>";
$var3=22.6;
 var_dump($var3);
echo"</br></br>**********************************************************";

echo"<h1 style='color: salmon;  text-align: left;'> STRING:</h1>";
$var4="Shaim'a Almaqtery";
 var_dump($var4);
echo"</br></br>**********************************************************";

echo"<h1 style='color: salmon;  text-align: left;'> FLOAT:</h1>";
$var5=true;
 var_dump($var5);
echo"</br></br>**********************************************************";

echo"<h1 style='color: salmon;  text-align: left;'> ARRAYS:</h1>";
$var6=[1,2,3];
var_dump($var6);
echo"</br></br>**********************************************************";
?>

<h1><?php
 echo "<div style='color: black;  text-align: center;border: 8px salmon ridge; box-shadow: 10px 10px 9px rgb(174, 174, 162);'> &#34العمليات الحسابيه</div>";
?></h1>
<?php
echo"<h1 style='color: salmon;  text-align: left;'> collecting:</h1>";
$x=6;
$y=4;
echo"x+y =  ";
var_dump($x+$y);
echo"</br></br>**********************************************************";

echo"<h1 style='color: salmon;  text-align: left;'> subtraction:</h1>";
$x=6;
$y=4;
echo"x-y =  ";
var_dump($x-$y);
echo"</br></br>**********************************************************";

echo"<h1 style='color: salmon;  text-align: left;'> multiplication:</h1>";
$x=6;
$y=4;
echo"x*y =  ";
var_dump($x*$y);
echo"</br></br>**********************************************************";

echo"<h1 style='color: salmon;  text-align: left;'> divison:</h1>";
$x=6;
$y=4;
echo"x/y =  ";
var_dump($x/$y);
echo"</br></br>**********************************************************";

echo"<h1 style='color: salmon;  text-align: left;'> the increase:</h1>";
$x=6;
echo"x=6  ";
echo"<br>";
echo"++x =  ";
var_dump(++$x);
echo"</br></br>**********************************************************";
echo"<h1 style='color: salmon;  text-align: left;'> decrease:</h1>";

$y=4;
echo"y=4  ";
echo"<br>";
echo"--y =  ";
var_dump(--$y);
echo"</br></br>**********************************************************";
?>

<h1><?php
 echo "<div style='color: black;  text-align: center;border: 8px salmon ridge; box-shadow: 10px 10px 9px rgb(174, 174, 162);'> &#34معاملات العمليات الحسابيه</div>";
?></h1>
<?php
$l=4;

echo" L=4";
echo"<br>";
echo"L+=10   ==> ";
var_dump($l+=10);
echo"</br></br>**********************************************************";
echo"<br><br>";
$M=4;

echo" M=4";
echo"<br>";
echo"M-=2   ==> ";
var_dump($M-=2);
echo"</br></br>**********************************************************";


echo"<br><br>";
$N=4;

echo" N=4";
echo"<br>";
echo"N*=2   ==> ";
var_dump($N*=2);
echo"</br></br>**********************************************************";

echo"<br><br>";
$C=10;

echo" C=10";
echo"<br>";
echo"C/=2   ==> ";
var_dump($C/=2);
echo"</br></br>**********************************************************";

echo"<br><br>";
$B=4;

echo" B=4";
echo"<br>";
echo"B**=2   ==> ";
var_dump($B**=2);
echo"</br></br>**********************************************************";
?>
<h1><?php
 echo "<div style='color: black;  text-align: center;border: 8px salmon ridge; box-shadow: 10px 10px 9px rgb(174, 174, 162);'> &#34جمل الشرط</div>";
?></h1>
<?php
echo"<h1 style='color: salmon;  text-align: left;'> IF-ELSE:</h1>";

$A=3;
echo"A=3  ";
echo"<br>";
if($A==!3){
echo"true";

}
else{
    echo"false";
}
echo"</br></br>**********************************************************";


?>
<h1><?php
 echo "<div style='color: black;  text-align: center;border: 8px salmon ridge; box-shadow: 10px 10px 9px rgb(174, 174, 162);'> &#34 المعاملات المنطقيه</div>";
?></h1>
<?php


echo"<h1 style='color: salmon;  text-align: left;'> AND:</h1>";
$G=6;
$H=4;
if($G==5&&$H==4){
    echo"true";
    
    }
    else{
        echo"false";
    }
    echo"</br></br>**********************************************************";
    echo"<h1 style='color: salmon;  text-align: left;'> OR:</h1>";
    if($G==6||$H==4){
        echo"true";
        
        }
        else{
            echo"false";
        }
echo"</br></br>**********************************************************";
echo"<h1 style='color: salmon;  text-align: left;'> XOR:</h1>";
if($G==4 XOR $H==4){
    echo"true";
    
    }
    else{
        echo"false";
    }


?>
<h1><?php
 echo "<div style='color: black;  text-align: center;border: 8px salmon ridge; box-shadow: 10px 10px 9px rgb(174, 174, 162);'> &#34 عمليات المقارنه</div>";
?></h1>
<?php
echo"<h1 style='color: salmon;  text-align: left;'> Equality:</h1>";

$op=2;
$or=9;
if($op==2){
    echo"true";
    
    }
    else{
        echo"false";
    }
    echo"</br></br>**********************************************************";
    echo"<h1 style='color: salmon;  text-align: left;'> Bigger then:</h1>";
    if($op>2){
        echo"true";
        
        }
        else{
            echo"false";
        }
        echo"</br></br>**********************************************************";
        echo"<h1 style='color: salmon;  text-align: left;'> Younger then:</h1>";
        if($op<$or){
            echo"true";
            
            }
            else{
                echo"false";
            }
            echo"</br></br>**********************************************************";
            echo"<h1 style='color: salmon;  text-align: left;'> Not worth:</h1>";
            if($op!==$or){
                echo"true";
                
                }
                else{
                    echo"false";
                }
                echo"</br></br>**********************************************************";

?>
<h1><?php
 echo "<div style='color: black;  text-align: center;border: 8px salmon ridge; box-shadow: 10px 10px 9px rgb(174, 174, 162);'> &#34 جمل الدوران</div>";
?></h1>
<?php
  echo"<h1 style='color: salmon;  text-align: left;'>SWITCH:</h1>";
$na=20;
switch($na)
{
  case 10:
    echo"<h3>The is number </h3>";break;
    case 20:
        echo"<h3>The is number </h3>";break;
default:
echo"<h3>Good luck </h3>";break;
}
echo"</br></br>**********************************************************";
echo"<h1 style='color: salmon;  text-align: left;'>FOR:</h1>";
for($i=0 ;$i<=10;++$i) 
{echo"<h2>$i='   $i   '</h2>";}
echo"</br></br>**********************************************************";
echo"<h1 style='color: salmon;  text-align: left;'>While:</h1>";
$bo=20;
while($bo<=24)
{
    echo"<button> $bo</button >";
    $bo++;
}
echo"</br></br>**********************************************************";

echo"<h1 style='color: salmon;  text-align: left;'> DO-While:</h1>";
$bo=20;
do
{
    echo"<button> $bo</button >";
    $bo++;
}while($bo>=24)
 ?>
</body>
</html>