<?php 
require 'vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client();

$response = $client->request('GET','http://www.omdbapi.com',[
	'query' => [
		'apikey' => '5cda3736',
		's' => 'kill'
	]
]);

var_dump(json_decode($response->getBody()->getContents(), true));