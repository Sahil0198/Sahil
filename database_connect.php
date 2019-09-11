<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>PostgreSQL SELECT Example 1</title>
<meta name="description" content="If we want to fetch all rows from the actor table the following PostgreSQL SELECT statement can be used.">
</head>
<body>
<h1>List of all names in the table</h1>
  <form name="frm" method="post">
    <label>Name</label>
    <input type="text" name="t1" placeholder="Enter your Name"><br><br>
    <input type="submit" name="btn" value="SUBMIT" />
  </form>
<?php
$db = pg_connect("host=ec2-174-129-227-146.compute-1.amazonaws.com port=5432 dbname=d6e3ftk139ub4t user=ggmwcclozzctgy password=2e72adfb860fa8fc865e14c969823ba27529638d9be4ea7bdf76dcca3bd97d5d");
if(isset($_POST['btn']))
{
  $a=$_POST['t1'];
  $qry="insert into public.shopify(name)values('$a')";
  $res=pg_query($db,$qry);
  if($res > 0)
  {
      echo "<script>alert('Data Saved Successfully')</script>"; 
  }
  else
  {
    echo "<script>alert('Data not Saved')</script>"; 
  }
}
  $result = pg_query($db,"SELECT * FROM public.shopify");
echo "<table>";
while($row=pg_fetch_assoc($result))
{
  echo "<tr>";
  echo "<td align='center' width='200'>" . $row['id'] . "</td>";
  echo "<td align='center' width='200'>" . $row['name'] . "</td>";
  echo "</tr>";
}
  echo "</table>";?>
</div>
</body>
</html>
