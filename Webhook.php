<?php
header('Content-Type: application/json');
$db = pg_connect("host=ec2-174-129-227-146.compute-1.amazonaws.com port=5432 dbname=d6e3ftk139ub4t user=ggmwcclozzctgy password=2e72adfb860fa8fc865e14c969823ba27529638d9be4ea7bdf76dcca3bd97d5d");

// Initializing pdo instance & shopify api credentials 
	private $db;
	private $api_key = "087f5c7784a37deecd2bde33a2cb1e09";
	private $password = "fb28a213fbcb9abba68d78aeff3e08d4";
	private $store = "sahil-indybytes-98.myshopify.com"

		$webhook_content = '';
		$webhook = fopen('php://input' , 'rb');
		while(!feof($webhook)){ //loop through the input stream while the end of file is not reached
			$webhook_content .= fread($webhook, 4096); //append the content on the current iteration
		}
		fclose($webhook); //close the resource
		$data = json_decode($webhook_content, true); //convert the json to array
		echo $data[1];
	
}
// Launching migration process now
$Shopify = new Shopify();
$results = $Shopify->processCustomersMigration();
echo $results;
?>
