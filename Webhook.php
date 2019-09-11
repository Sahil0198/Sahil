<?php
echo 'sahil';
// Initializing pdo instance & shopify api credentials 
		$db;
		$api_key = "087f5c7784a37deecd2bde33a2cb1e09";
		$password = "fb28a213fbcb9abba68d78aeff3e08d4";
		$store = "sahil-indybytes-98.myshopify.com"

		$webhook_content = '';
		$webhook = fopen('php://input' , 'rb');
		while(!feof($webhook)){ //loop through the input stream while the end of file is not reached
			$webhook_content .= fread($webhook, 4096); //append the content on the current iteration
		}
		fclose($webhook); //close the resource
		$data = json_decode($webhook_content, true); //convert the json to array
		echo $data[1];
	
?>
