<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Step1 extends CI_Controller {


	public function index()
	{

		$this->load->library('foursquare');

		if (array_key_exists("code", $_GET))
		{
			$this->session->set_userdata('foursquare', $_GET['code']);
		}
		else
		{
			echo "<a href='".$this->foursquare->authentication_link("http://localhost/CodeIgniter-Foursquare/step2")."'>Connect to this app via Foursquare</a>";
		}

		$this->load->view('home_view');
	}
}