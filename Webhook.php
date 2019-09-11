<?php
	echo "sahil";
	$webhook_content = '';
	$webhook = fopen('php://input' , 'rb');
	while(!feof($webhook)){ //loop through the input stream while the end of file is not reached
		$webhook_content .= fread($webhook, 4096); //append the content on the current iteration
	}
	fclose($webhook); //close the resource
	$data = json_decode($webhook_content, true); //convert the json to array
	echo $data[0];
?>
