<?php
  $data = file_get_contents('php://input');
if($data) {
  $file = fopen("test.txt","w");
  fwrite($file,$data);
  fclose($file);
}
echo $data['title']."<br>";
echo $data['product_type']."<br>";
?>
