<?php
  $db = pg_connect("host=ec2-174-129-227-146.compute-1.amazonaws.com port=5432 dbname=d6e3ftk139ub4t user=ggmwcclozzctgy password=2e72adfb860fa8fc865e14c969823ba27529638d9be4ea7bdf76dcca3bd97d5d");
  $data = file_get_contents('php://input');
if($data) {
  $data1 = json_decode($data, true);
//   $qry = "insert into webhook.product_data(json)values('$data')";
//   $res=pg_query($db,$qry);
  foreach($row as $data1){
    echo $row['title']; 
  }
  
  $file = fopen("test.txt","w");
  fwrite($file,print_r($data1,true));
  fclose($file);
}
?>
