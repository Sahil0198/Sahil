<?php
    $db_connection = pg_connect("host=Shopify-database dbname=d6e3ftk139ub4t user=sahil password=sahil@0198");
    $result = pg_query($db_connection, "SELECT name FROM webhook.tbl_web");
    echo $result;
    echo "sahil";
?>
