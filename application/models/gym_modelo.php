<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gym_modelo extends CI_Model {

	function __construct() 
	{
		parent::__construct();
		$this->load->database();
	}
	public function index()
	{
		
	}
		
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */