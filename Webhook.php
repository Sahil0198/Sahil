<?php
    $db_connection = pg_connect("host=Shopify-database dbname=d6e3ftk139ub4t user=ggmwcclozzctgy password=");
    $qry="SELECT name FROM tbl_web WHERE id=1";
    $result = pg_query($db_connection, $qry);
    echo $result;
?>
