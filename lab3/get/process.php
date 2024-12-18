<?php
if(isset($_GET['username'])&&isset($_GET['password']))
{
$username=htmlspecialchars($_GET['username']);
$password=htmlspecialchars($_GET['password']);
echo "<h1> اهلاً وسهلاً بكم $username!</h1>";
echo "<p>  الباسوورد هو*********</p>";

}
 else{
echo "<p> يرجى ادخال بياناتك</p>";

 }


