<?php
    $db_connection = pg_connect("host=Shopify-database dbname=d6e3ftk139ub4t user=ggmwcclozzctgy password=");
    $result = pg_query($db_connection, "SELECT name FROM tbl_web");
    echo $result;
    echo "sahil";
?>
