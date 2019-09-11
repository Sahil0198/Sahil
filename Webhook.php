<?php
  $db = pg_connect("host=ec2-174-129-227-146.compute-1.amazonaws.com port=5432 dbname=d6e3ftk139ub4t user=ggmwcclozzctgy password=2e72adfb860fa8fc865e14c969823ba27529638d9be4ea7bdf76dcca3bd97d5d");
  $data = file_get_contents('php://input');
if($data) {
  $data1 = json_decode($data, true);
  $qry = "insert into webhook.webhook_tbl(product_data)values('$data1')";
  $res=pg_query($db,$qry);
  if($res >= 0)
    {
        echo "<script>alert('data store successfully')</script";
    }
  else
    {
        echo "<script>alert('data not store')</script>";
    }
}
?>
