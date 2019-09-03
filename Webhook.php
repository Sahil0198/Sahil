<?php
    $db_connection = pg_connect("ec2-174-129-227-146.compute-1.amazonaws.com","ggmwcclozzctgy","2e72adfb860fa8fc865e14c969823ba27529638d9be4ea7bdf76dcca3bd97d5d","d6e3ftk139ub4t");
    $qry="SELECT name FROM webhook.tbl_web WHERE id=1";
    $result = pg_query($db_connection, $qry);
    echo $result;
    echo "bbb";
?>
