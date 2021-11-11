<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class cadastro extends CI_Controller {

function _construct(){
parent_construct();

}

				public function cadusuario()
	{
		$this->load->view('cadusuario');
	}
	
					public function adicionausu()
	{
		$this->load->view('adicionausu');
	}
	
	
		public function cadveiculo()
	{
		$this->load->view('cadveiculo');
	}
	
		public function adicionaveiculo()
	{
		$this->load->view('adicionaveiculo');
	}
	
	


	
	
	
	
		
}

/* End of file welcome.php */
/* Location: ./application/controllers/primeiro.php */