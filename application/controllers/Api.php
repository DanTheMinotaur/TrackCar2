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

	public function index_get() {
		$data['page_title'] = 'Irish Rail REST API';
		$data['page_description'] = 'Reference';
		$data['content'] = 'api/home';

		$this->load->view('base', $data);
	}

	public function stations_get() {
		if($this->get('type')) {
			$type = $this->check_valid_type($this->get('type'));

			if($type) {
				$this->response($this->response($this->rail_api->get_all_stations_by_type($type)), 200);
			} else {
				$this->response(array('error' => "Invalid Train Type Parameter"), 400);
			}
		} else {
			// Default action
			$this->response($this->rail_api->get_all_stations(), 200);
		}
	}

	public function trains_get() {
		if($this->get('type')) {
			$type = $this->check_valid_type($this->get('type'));

			if($type) {
				$this->response($this->response($this->rail_api->get_current_trains($type), 200));
			} else {
				$this->response(['error' => "Invalid Train Type Parameter"], 400);
			}
		} else {
			$this->response($this->rail_api->get_current_trains());
		}
	}

	public function station_get() {
		if($this->get('name') && $this->get('minutes')) {

			$station_name = $this->get('name');
			$minutes = intval($this->get('minutes'));

			$result = $this->rail_api->get_station_data($station_name, $minutes);

			if(is_string($result)) {
				$this->response(['error' => $result], 400);
			} else {
				$this->response($result, 200);
			}

		} elseif ($this->get('name')) {

			$station_name = $this->get('name');

			$result = $this->rail_api->get_station_data($station_name);

			if(is_string($result)) {
				$this->response(['error' => $result], 400);
			} else {
				$this->response($result, 200);
			}
		} else {
			$this->response(['error' => "Call Requires a name and/or minutes parameter."], 400);
		}
		$this->response(['error' => "Invalid Train Type Parameter"], 400);
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
