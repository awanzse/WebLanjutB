<?php
defined('BASEPATH') OR exit('No direct script access allowed');

<<<<<<< HEAD:application/controllers/Welcome.php
<<<<<<< HEAD
class MUHAMMAD RIDHO SAPUTRA extends CI_Controller {
=======
class WELCOME extends CI_Controller {
>>>>>>> 4528227ee0d70bedbb607c7d36dc61d0ccbb8786
=======
class riva extends CI_Controller {
>>>>>>> c4529e05462f662d36162f46940dff9a50cd828d:application/controllers/riva.php

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
	public function index()
	{
		$this->load->view("riva");
	}
}
