<?php
    $db_connection = pg_connect("host=ec2-174-129-227-146.compute-1.amazonaws.com dbname=d6e3ftk139ub4t user=ggmwcclozzctgy password=2e72adfb860fa8fc865e14c969823ba27529638d9be4ea7bdf76dcca3bd97d5d");
    $qry="SELECT name FROM webhook.tbl_web WHERE name='sahil'";
    $result = pg_query($db_connection, $qry);
    echo $result;
    echo "bbb";
?>
