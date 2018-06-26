<?php
/**
 * Created by PhpStorm.
 * User: neonl
 * Date: 25/06/2018
 * Time: 22:45
 */

class XML_download {
	private $xml_dir;
	private $api_url;
	private $get_all_stations;
	protected $CI;

	function __construct($xml_dir = 'application/data/xml/') {
		$this->CI =& get_instance();
		$this->CI->load->helper('file');
		if(file_exists($xml_dir)) {
			$this->xml_dir = $xml_dir;
		} else {
			echo "Folder Doesn't exist, reset to default";
			$this->xml_dir = 'application/data/xml/'; // Reset to default if invalid location
		}
		$this->api_url = 'http://api.irishrail.ie/realtime/realtime.asmx/';
		$this->get_all_stations = $this->api_url . 'getAllStationsXML';
	}

	private function curl_download($url) {
		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => $url,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
			CURLOPT_HTTPHEADER => array(
				"cache-control: no-cache"
			),
		));

		$response = curl_exec($curl);

		curl_close($curl);

		return $response;
	}

	private function xml_to_json($xml) {
		return json_decode(json_encode(simplexml_load_string($xml)));
	}

	public function get_all_stations() {
		return $this->xml_to_json($this->curl_download($this->get_all_stations));
	}

	public function get_all_stations_by_type($type) {
		return $this->xml_to_json($this->curl_download($this->get_all_stations . '_WithStationType?StationType=' . $type));
	}

	public function get_current_trains($type = Null) {
		$current_trains_url = $this->curl_download($this->get_all_stations . 'getCurrentTrainsXML');
		if(isset($type)) {
			return $this->xml_to_json($current_trains_url . '_WithTrainType?TrainType=' . $type);
		} else {
			return $this->xml_to_json($current_trains_url);
		}
	}




	/*
	 * Checks if directory exists within the XML dir and creates it if not
	 */
	public function dir_checker($dir) {
		if(file_exists($this->xml_dir . $dir)) {
			return true;
		} else {
			return mkdir($this->xml_dir . $dir);
		}
	}
	public function download_all_stations() {
		return write_file($this->xml_dir . 'AllStations.xml', $this->curl_download($this->get_all_stations));
	}

	public function test_json() {
		echo $this->xml_to_json($this->curl_download($this->get_all_stations));
	}
}

//$test = new XML_download();

//$test->download_all_stations();
