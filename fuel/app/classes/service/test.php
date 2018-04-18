<?php
namespace Service;
use JonnyW\PhantomJs\Client;

		$client = new \Goutte\Client;

		$client = Client::getInstance();
		$client->getEngine()->setPath('./../bin/phantomjs');

		$request = $client->getMessageFactory()->createRequest('https://www.mirrativ.com/', 'GET');
		$response = $client->getMessageFactory()->createResponse();

		$client->send($request, $response);

		if($response->getStatus() === 200) {
			echo $response->getContent();
		}
