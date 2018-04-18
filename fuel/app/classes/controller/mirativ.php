<?php
class Controller_Mirativ extends Controller
{
	protected $service;

	public function __construct(){
		$this->service = new \Service\Search;
		return;
	}

	public function action_url($url = 'https://www.mirrativ.com/live/YfilcXyGgVMBcPUBs5o5qw') {
	  $header  =  get_headers($url);
	    if(strstr($header[0],  '200')) return true;
	    return false;
		}

	public function action_html()
	{
		$html = $this->service->gethtml();
		echo $html;
	}

	public function action_search()
	{
		$urls = $this->service->geturls();
		var_dump($urls);
		/* var_dump($s); */
	}
}
