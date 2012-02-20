<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Step2 extends CI_Controller {

	public function index()
	{
		$this->load->library('foursquare');

		if (array_key_exists("code",$_GET))
		{
			$this->foursquare->get_token($_GET['code']);
		}

		$params = array("name"=>"john");
		$response = $this->foursquare->get_private("users/search", $params);
		$users = json_decode($response);
		$data['users'] = $users;

		$this->load->view('home_view', $data);
	}
}