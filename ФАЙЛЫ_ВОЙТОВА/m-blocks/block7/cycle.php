<? //  Вызываемая программа ?>

<html>
<HEAD>
  <TITLE>Пример на работу с циклами</TITLE>
</HEAD>
<body>

<h3> Цикл for для образования имен</h3>
<?
$a= "Александр ";
for ($i=1; $i< 10; $i++)  {
    $b= $a . $i;
    echo " <li>  $b ";
}
?>

<h3> Цикл for с несколькими переменными: for($i=0,$j=0,$s=""; $i<100; $j++,$i+=$j) $s=$s." $i";</h3>
<?
for ($i=0, $j=0, $s=""; $i<100; $j++, $i+= $j) $s= $s . " $i";
    echo "s= $s";
?>


<h3> Цикл while для нахождения степеней двойки</h3>
<?
$i=1; $p=1; 
while ($i<32) {
   echo $p, " ";
   $p = $p * 2;
   $i = $i + 1;
}


echo "<h3>Цикл while для нахождения квадратов и нат. лог. квадратов </h3> ";
$i=1;
while ($i<100) {
    $k= $i * $i; $l= log($k);
    echo " <li>i=$i i*i=$k  log(i*i)=$l";
    $i = $i + 1;
    }

?>


</body>
</html>
