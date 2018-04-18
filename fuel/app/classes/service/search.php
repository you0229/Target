<?php
namespace Service;
use JonnyW\PhantomJs\Client;

class Search
{
	public $client = array();

	public function __construct()
	{
		$this->client = new \Goutte\Client;

		return;
	}

	public function gethtml()
	{
		//phantomjsによるjsの実行
		$client = Client::getInstance();
		$client->getEngine()->setPath('./../bin/phantomjs');

		$request  = $client->getMessageFactory()->createRequest();
		$response = $client->getMessageFactory()->createResponse();

		$url = 'https://www.mirrativ.com/';
		$request->setUrl($url);

		$client->send($request, $response);
		return $response->getContent();
	}

	public function geturls()
	{
		$crawler = $this->client->request('GET', 'http://vagrant/mirativ/html');

		//全リンクを取得
		$urls = $crawler->filter('a')->extract('href');
		return $urls;
	}
}
