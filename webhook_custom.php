<?php
header('Content-Type: application/json');
	private $db;
	private $api_key = "087f5c7784a37deecd2bde33a2cb1e09";
	private $password = "fb28a213fbcb9abba68d78aeff3e08d4";
	private $store = "sahil-indybytes-98.myshopify.com";
	
	function __construct(){		
		$this->db = new DB('DB-CUSTOMERS');			
	}
	
	// Constructing store url
	private function storeUrl(){		
		return "https://".$this->api_key.":".$this->password."@".$this->store;		
	}
	
	
	
		$url = $this->storeUrl()."/admin/customers.json";
		
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_VERBOSE, 0);
		//curl_setopt($curl, CURLOPT_HEADER, 1);
		curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($customer));
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		$response['data'] = curl_exec ($curl);
		if(curl_errno($curl))
		{
			$response['error'] = 'Curl error: ' . curl_error($curl);
		}
		curl_close ($curl);		
		return $response;
	
  
	// Responsible for sending push notification to admin whenever someone places an order on shopify store
	public function processOrderWebHook(){
		$webhook_content = '';
		$webhook = fopen('php://input');
    $data1 = json_decode($data, true);
    $file = fopen("test_custom.txt","w");
    fwrite($file,$webhook);
    fclose($file);
	}	
	
}
?>
