<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>PostgreSQL SELECT Example 1</title>
<meta name="description" content="If we want to fetch all rows from the actor table the following PostgreSQL SELECT statement can be used.">
</head>
<body>
<h1>List of all names in the table</h1>
<?php
$db = pg_connect("host=ec2-174-129-227-146.compute-1.amazonaws.com port=5432 dbname=d6e3ftk139ub4t user=ggmwcclozzctgy password=2e72adfb860fa8fc865e14c969823ba27529638d9be4ea7bdf76dcca3bd97d5d");
$result = pg_query($db,"SELECT * FROM tbl_web");
echo "<table>";
while($row=pg_fetch_assoc($result)){echo "<tr>";
echo "<td align='center' width='200'>" . $row['id'] . "</td>";
echo "<td align='center' width='200'>" . $row['name'] . "</td>";
echo "</tr>";}echo "</table>";?>
</div>
</body>
</html>
