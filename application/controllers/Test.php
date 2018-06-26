<?php
/**
 * Created by PhpStorm.
 * User: neonl
 * Date: 25/06/2018
 * Time: 23:22
 */

include(APPPATH . 'libraries/XML_download.php');

class Test extends CI_Controller
{
	public function index() {
		$data['page_title'] = 'Test Page';
		$data['page_description'] = 'Page for running tests';
		$data['content'] = 'test';

		$test_xml_download = new XML_download();

		//$test_xml_download->download_all_stations();
		$test_xml_download->test_json();

		$this->load->view('base', $data);
	}
}
