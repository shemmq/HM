<?php
if(isset($_POST['username'])&&isset($_POST['password']))
{
$username=htmlspecialchars($_POST['username']);
$password=htmlspecialchars($_POST['password']);
echo "<h1> اهلاً وسهلاً بكم $username!</h1>";
echo "<p>  الباسوورد هو*********</p>";

}
 else{
echo "<p> يرجى ادخال بياناتك</p>";

 }


