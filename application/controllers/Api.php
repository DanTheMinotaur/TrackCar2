<?php
/**
 * Created by PhpStorm.
 * User: neonl
 * Date: 26/06/2018
 * Time: 18:08
 */

require (APPPATH . 'libraries/REST_Controller.php');
require (APPPATH . 'libraries/XML_download.php');

defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends REST_Controller {
	private $rail_api;

	function __construct() {
		parent::__construct();

		$this->rail_api = new XML_download();
	}

	public function allStations_get() {
		$this->response($this->rail_api->get_all_stations());
	}

}
