<html>
<body>
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
?>
</body>
</html>