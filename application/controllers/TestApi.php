<?php
/**
 * Created by PhpStorm.
 * User: neonl
 * Date: 26/06/2018
 * Time: 00:44
 */

require (APPPATH . 'libraries/REST_Controller.php');
defined('BASEPATH') OR exit('No direct script access allowed');

class TestApi extends REST_Controller
{
	public function index_get()
	{
		$this->response("Hello");
	}
}
