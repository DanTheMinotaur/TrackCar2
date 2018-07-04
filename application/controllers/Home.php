<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: DDevine
 * Date: 11/06/2018
 * Time: 13:37
 */

class Home extends CI_Controller {

	function __construct() {
        parent::__construct();

        //$this->load->helper('url');
		redirect('/api');
	}

	public function index() {
        $data['page_title'] = 'Home';
        $data['page_description'] = 'Here is the home page.';
        $data['content'] = 'home/home';

        $this->load->view('base', $data);
    }
}
