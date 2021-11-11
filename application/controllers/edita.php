<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class edita extends CI_Controller {

function _construct(){
parent_construct();

}

				public function editausuario()
	{
		$this->load->view('editausuario');
	}
	
		public function atualizausuario()
	{
		$this->load->view('atualizausuario');
	}
	
	
		public function excluiusuario()
	{
		$this->load->view('excluiusuario');
	}
	
	public function editaveiculo()
	{
		$this->load->view('editaveiculo');
	}
	
		public function atualizaveiculo()
	{
		$this->load->view('atualizaveiculo');
	}
		
    	public function excluiveiculo()
	{
		$this->load->view('excluiveiculo');
	}	
	
		public function finaliza()
	{
		$this->load->view('finaliza');
	}	
		
	
				
	


	
	
	
	
		
}

/* End of file welcome.php */
/* Location: ./application/controllers/primeiro.php */