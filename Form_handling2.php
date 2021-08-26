<?php
$a = $_POST['First'];
$b = $_POST['Last'];
$c = $_POST['email'];
$d = $_POST['birthday'];
$e = $_POST['gender'];
$f = $_POST['phone'];



echo $a;
echo $b;
echo"<br>";
echo $c;
echo"<br>";
echo $d;
echo"<br>";
echo $e;
echo"<br>";
echo $f;
echo"<br>";



if($a=='Deepak')
{
    echo"Welcome Admin";
}
else
{
    echo"Welcome User";
}
?>