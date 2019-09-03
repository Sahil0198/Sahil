<?php
    $db_connection = pg_connect("host=Shopify-database dbname=d6e3ftk139ub4t user=ggmwcclozzctgy password=");
    $qry="SELECT name FROM webhook.tbl_web WHERE name='sahil'";
    $result = pg_query($db_connection, $qry);
    echo $result;
    echo "bbb";
?>
