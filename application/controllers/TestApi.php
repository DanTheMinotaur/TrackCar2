<?php
/**
 * Created by PhpStorm.
 * User: neonl
 * Date: 26/06/2018
 * Time: 00:44
 */

require (APPPATH . 'libraries/REST_Controller.php');
require (APPPATH . 'libraries/XML_download.php');

defined('BASEPATH') OR exit('No direct script access allowed');

class TestApi extends REST_Controller
{
	function __construct() {
        parent::__construct();
		redirect('/api');
	}

	public function index_get()
	{
		$test_xml_download = new XML_download();
		$this->response($test_xml_download->test_json());
	}

}
