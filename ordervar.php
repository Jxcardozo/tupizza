<html>
<?php //Ejemplo aprenderaprogramar.com
	echo "<pre>";
	echo print_r($_POST);
	echo "<pre/>";
$name = $_POST['name'];
$pizza1 = $_POST['pizza1'];
$pizza2 = $_POST['pizza2'];
$pizza3 = $_POST['pizza3'];
$pizza4 = $_POST['pizza4'];
$size1 = $_POST['sizecho'];
$size2 = $_POST['sizecha'];
$size3 = $_POST['sizehaw'];
$size4 = $_POST['sizeveg'];
$drink1 = $_POST['drink1'];
$drink2 = $_POST['drink2'];
$sized1 = $_POST['sizecok'];
$sized2 = $_POST['sizeman'];
$top1 = $_POST['top1'];
$top2 = $_POST['top2'];
$sizet1 = $_POST['zizetop1'];
$sizet2 = $_POST['zizetop2'];
$ok = $_POST['ok'];
$value1 = ($size1+$size2+$size3+$size4+$sized1+
$sized2+$sizet1+$sizet2); 

switch ($pizza1){
case $pizza1:
echo "<br/> &nbsp;".$pizza1."";
default:
echo "<br/> &nbsp;".$size1."<br/>";
break;
}

$size2 = $_POST['sizecha'];

switch ($pizza2){
case $pizza2:
echo "<br/> &nbsp;".$pizza2."";
case $pizza1:
echo "<br/> &nbsp;".$size2."<br/>";

}

switch ($pizza3){
case $pizza3:
echo "<br/> &nbsp;".$pizza3."";
case $pizza3:
echo "<br/> &nbsp;".$size3."<br/>";
}

switch ($pizza4){
case $pizza4:
echo "<br/> &nbsp;".$pizza4."";
case $pizza4:
echo "<br/> &nbsp;".$size4."<br/>";

}

$sized1 = $_POST['sizecok'];
switch ($drink1){
case $drink1:
echo "<br/> &nbsp;".$drink1."";
case $drink1:
echo "<br/> &nbsp;".$sized1."<br/>";
break;
}

$sized2 = $_POST['sizeman'];
switch ($drink2){
case $drink2:
echo "<br/> &nbsp;".$drink2."";
case $drink2:
echo "<br/> &nbsp;".$sized2."<br/>";
}


$top1 = $_POST['top1'];
switch ($top1){
case $top1:
echo "<br/> &nbsp;".$top1."";
case $top1;
echo "<br/> &nbsp;".$sizet1."<br/>";
}
switch ($top2){
case $top2:
echo "<br/> &nbsp;".$top2."";
case $top2:
echo "<br/> &nbsp;".$sizet2."<br/>";
break;
}

$ok = $_POST['ok'];
echo $ok. 
$value1 = ($size1+$size2+$size3+$size4+$sized1+
$sized2+$sizet1+$sizet2);
echo "<br/> &nbsp;El total de tu pedido es: $".$value1."
Gracias".$name."! :)<br/>";



?>
<?php

if(isset($_POST['ok'])) {
  $name = $_POST['name'];
  $handle = fopen('orderjon.txt', 'a+');
  fwrite($handle, $name."\n");
  fclose($handle); 
}

if(isset($_POST['ok'])) {
  $name = $_POST['pizza1'];
  $handle = fopen('orderjon.txt', 'a+');
  fwrite($handle, $name."\n");
  fclose($handle); 
 
}



if(isset($_POST['ok'])) {
  $name = $_POST['name'];
  $handle = fopen('orderjon.txt', 'a+');
  fwrite($handle, $name."\n");
  fclose($handle); 
}

if(isset($_POST['ok'])) {
  $value = $value1;
  $h = fopen('orderjon.txt', 'a+');
  fwrite($h, $value."\n");
  fwrite($h, $pizza1."\n");
  fwrite($h, $size1."\n");
  fwrite($h, $pizza2."\n");
  fwrite($h, $size2."\n");
  fwrite($h, $pizza3."\n");
  fwrite($h, $size3."\n");
  fwrite($h, $pizza4."\n");
  fwrite($h, $size4."\n");
  fwrite($h, $drink1."\n");
  fwrite($h, $sized1."\n");
  fwrite($h, $drink2."\n");
  fwrite($h, $sized2."\n");
  fwrite($h, $top1."\n");
  fwrite($h, $sizet1."\n");
  fwrite($h, $top2."\n");
  fwrite($h, $sizet2."\n");
  fclose($h); 
  
}
?>


<p><form action="orderjon.txt" method="post">
<input name="ok" value="ok" type="submit"></form></p>
<a href="contact.php">Regresar</a>

</html>
