<HTML>
<HEAD><TITLE> Функции </TITLE>
</HEAD>
<BODY>

<?php
  echo "<h3>!!999!! </h3>";
  echo "<br><br>";
  echo "<h3>!!!!!Пример 0. Передача параметров по ссылке </h3>";

  function GLOB($a)
  { 
    echo "<h3>!!!Перебор массива \$a </h3> ";
    foreach ( $a as $k => $v) echo "   ! $k=>$v !";
  }
  GLOB($GLOBALS);
  echo "<h3>@@@@@Пример 0. Передача параметров по ссылке </h3>";


  echo "<br><br>";
  echo "<h3>Пример 1. Передача параметров по ссылке </h3>";

  function Ref($a)
  { 
      echo "<li> в функции до увеличения  \$a= $a ";
      $a++;
      echo "<li> в функции после увеличения  \$a= $a ";
  }

  // Вариант 1 Передача параметров без ссылки
  echo "Передача параметров без ссылки";
  $num= 10;
  // В Ref($a) будет Создается локальная переменная копия
  // переменной $num
  Ref($num);
  echo "<li> после вызова функции  Ref (параметры без ссылки) \$num= $num ";

  // Вариант 2 Передача параметров по ссылке (& при вызове функции)
  echo "<br><br><br>Передача параметров по ссылке (ставим & перед параметром при вызове функции)";
  $num= 10;
  // Если поставить & перед параметром $num, то аргумент в Ref($a) не будет копией
  // переменной $num, а будет ссылаться на $num
  Ref(&$num);
  echo "<li> после вызова функции  Ref (параметры по ссылке. & при вызове функции) \$num= $num ";

  // Передача параметров по ссылке. Символ & задается при определении параметра в самой функции
  function Ref2(&$a)
  { 
      echo "<li> в функции до увеличения  \$a= $a ";
      $a++;
      echo "<li> в функции после увеличения  \$a= $a ";
  }

  // Вариант 3 Символ & задается при определении параметра в самой функции
  echo "<br><br><br>Передача параметров по ссылке (символ & задается при определении параметра в самой функции)";
  $num= 10;
  // Если поставить & перед параметром $num, то аргумент в Ref($a) не будет копией
  // переменной $num, а будет ссылаться на $num
  Ref2($num);
  echo "<li> после вызова функции  Ref2 (параметры по ссылке. & в самой функции) \$num= $num ";
?>


<?
  echo "<br><br><br>";
  echo "<h3>Пример 2. Локальные и глобальные переменные</h3>";

  $a= 100; $b=10;
  // Локальные переменные параметры
  function ftestl($a)
  {   $b=3;
      echo "<li> значение переменной \$a (параметра) при входе в функцию:  \$a= $a ";
      $a++;
      echo "<li> в функции после изменения \$a= $a   локальное \$b=$b";
  }

  echo "<li> значение переменных до выполнения функции:  \$a=$a \$b=$b";
  ftestl($a);
  echo "<li> значение переменных после выполнения функции:  \$a=$a \$b=$b";



  // Локальные переменные 
  function ftestr()
  {   $i= rand(); // записываем в  $i случайное число
      echo "<li> значение локальной переменной  \$i = $i ";
      // она не имеет нмкакого отношения к глобальной переменной $i
  }

  echo "<br><br><br> значения переменной \$i в функции ftestr и вне функции разные, поэтому цикл выполняется только 10 раз. ";
  for ($i=0; $i!=10; $i++) ftestr();


  // Глобальные переменные 
  function ftestg()
  {   global $j;
      $j= rand(); // записываем в   $j случайное число
      echo "<li> значение глобальной переменной  \$j = $j ";
  }

  echo "<br><br><br> значения переменной \$j в функции ftestg и вне функции одинаковые";
     for ( $j=0;  $j < 30000;  $j++) ftestg();

?>


</BODY>
</HTML>
