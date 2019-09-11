<?php
  $data = file_get_contents('php://input');
if($data) {
  $data1 = json_decode($data, true);
  $file = fopen("test.txt","w");
  fwrite($file,$data);
  fclose($file);
}
?>
