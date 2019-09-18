
<?php
$url = 'https://087f5c7784a37deecd2bde33a2cb1e09:fb28a213fbcb9abba68d78aeff3e08d4@sahil-indybytes-98.myshopify.com';
   	$shopify = $url . '/admin/webhooks.json';
	$arguments = array( 'webhook' => array('topic' => 'products/create',
	'address' => 'https://shopifyhooks.herokuapp.com/webhook_custom.php',
	'format' => 'json'
	));
	$data_string = json_encode($arguments);
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $shopify);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array( 'Content-Type: application/json', 'Content-Length: ' . strlen($data_string)));
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POST, true);
	$data = curl_exec($ch);

	curl_close($ch);
	return $data;
	$data1 = file_get_contents('php://input');
	if($data1) {
	  $data2 = json_decode($data1, true);
	//   $qry = "insert into webhook.product_data(json)values('$data')";
	//   $res=pg_query($db,$qry);
	  $file = fopen("test_custom.txt","w");
	  fwrite($file,print_r($data_string,true));
	  fclose($file);







// 	$webhooks = $url . '/admin/webhooks.json', $arguments;
// 	$webhook_content = '';
//     $webhook = fopen('php://input' , 'rb');
//     while(!feof($webhook)){  
//         $webhook_content .= fread($webhook, 4096);  
//     }
//     fclose($webhook);
// 	error_log($webhook_content);
// 	$orders = json_decode($webhook_content, true);
// 	$file = fopen("test_custom.txt","w");
// 	fwrite($file,print_r($orders,true));
// 	fclose($file);

// //   $db = pg_connect("host=ec2-174-129-227-146.compute-1.amazonaws.com port=5432 dbname=d6e3ftk139ub4t user=ggmwcclozzctgy password=2e72adfb860fa8fc865e14c969823ba27529638d9be4ea7bdf76dcca3bd97d5d");
//   $data = file_get_contents('php://input');
// if($data) {
//   $data1 = json_decode($data, true);
// //   $qry = "insert into webhook.product_data(json)values('$data')";
// //   $res=pg_query($db,$qry);
//   $file = fopen("test_custom.txt","w");
//   fwrite($file,print_r($data1,true));
//   fclose($file);
// }
?>
