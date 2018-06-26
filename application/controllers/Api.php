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
	private $rail_api, $valid_types;

	function __construct() {
		parent::__construct();

		$this->rail_api = new XML_download();
		$this->valid_types  = array(
			'all' => 'A',
			'suburban' => 'S',
			'mainland' => 'M',
			'dart' => 'D'
		);

	}


	public function index_get() {
		$data['page_title'] = 'Irish Rail API';
		$data['page_description'] = 'Find API methods';
		$data['content'] = 'api/home';

		$type = $this->check_valid_type('Dart');

		if($type) {
			echo "Truw";
		} else {
			echo "no";
		}

		$this->load->view('base', $data);
	}

	public function allStations_get() {
		if($this->get('type')) {
			$type = $this->check_valid_type($this->get('type'));

			if($type) {
				$this->response($this->response($this->rail_api->get_all_stations_by_type($type)));
			} else {
				$this->response(array('error' => "Invalid Train Type Parameter"), 400);
			}
		} else {
			// Default action
			$this->response($this->rail_api->get_all_stations());
		}
	}

	public function getTrains_get() {
		if($this->get('type')) {

		}
	}

	private function check_valid_type($type) {
		$type = strtolower($type);

		$valid_types = array(
			'all' => 'A',
			'suburban' => 'S',
			'mainland' => 'M',
			'dart' => 'D'
		);

		return array_key_exists($type, $valid_types) ? $valid_types[$type] : false;
	}
}
