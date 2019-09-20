
<?php
$url = 'https://087f5c7784a37deecd2bde33a2cb1e09:fb28a213fbcb9abba68d78aeff3e08d4@sahil-indybytes-98.myshopify.com';
   	$shopify = $url . '/admin/webhooks.json';
	//$topics = ['products/update', 'products/create'];
	//foreach ($topics as $topic){
	$arguments = array( 'webhook' => array('topic' => 'products/update',
	'address' => 'https://indybytes.com/webhook_wordpress/product-page',
	'format' => 'json'
	));
	echo $data_string = json_encode($arguments);
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $shopify);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array( 'Content-Type: application/json', 'Content-Length: ' . strlen($data_string)));
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POST, true);
	$data = curl_exec($ch);
	
	curl_close($ch);
	echo $data;
	return $data;
	//}
?>
