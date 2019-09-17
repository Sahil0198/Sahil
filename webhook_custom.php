
<?php


function callAPI($data){
	echo "sds";
	$url = 'https://087f5c7784a37deecd2bde33a2cb1e09:fb28a213fbcb9abba68d78aeff3e08d4@sahil-indybytes-98.myshopify.com/admin/webhooks.json';
   	
	$customer = array(
	"customer" => array(
		"topic" => "products/create",
		"address" => "https://shopifyhooks.herokuapp.com/webhook_custom.php",
		"format" => "json"
		)
	);
	$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_VERBOSE, 0);
		curl_setopt($curl, CURLOPT_HEADER, 1);
		curl_setopt($curl, CURLOPT_CUSTOMREQUEST, json_encode($customer));
		curl_setopt($curl, CURLOPT_POSTFIELDS, "POST");
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		$response['data'] = curl_exec ($curl);
		if(curl_errno($curl))
		{
			$response['error'] = 'Curl error: ' . curl_error($curl);
		}
		curl_close ($curl);		
		return $response;
}

if(isset($_REQUEST['q'])){
	$query = $_REQUEST['q'];
	var_dump(callAPI($query));
}

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
