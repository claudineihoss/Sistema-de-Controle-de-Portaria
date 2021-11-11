<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class autenticar extends CI_Controller {

function _construct(){
parent_construct();

}

				public function autentica()
	{
		$this->load->view('autenticar');
	}
	
	
		public function escolha()
	{
		$this->load->view('escolher');
	}
	
	
	
	
	
		
}

/* End of file welcome.php */
/* Location: ./application/controllers/primeiro.php */