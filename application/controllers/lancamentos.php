<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class lancamentos extends CI_Controller {

function _construct(){
parent_construct();

}

				public function registro()
	{
		$this->load->view('registro');
	}
	
	public function addregistro()
	{
		$this->load->view('adicionaregistro');
	}
	
	public function abertos()
	{
		$this->load->view('abertos');
	}
	
		public function editaregistro()
	{
		$this->load->view('editaregistro');
	}
	
		public function verificaexcluir()
	{
		$this->load->view('verificaexcluir');
	}
	
		public function excluiaberto()
	{
		$this->load->view('excluiaberto');
	}
	
		public function finalizarregistro()
	{
		$this->load->view('finalizarregistro');
	}
	
		public function finalizados()
	{
		$this->load->view('finalizados');
	}
	
	public function relatorio()
	{
		$this->load->view('relatorio');
	}
	
	public function data()
	{
		$this->load->view('data');
	}
	
	

		
}

/* End of file welcome.php */
/* Location: ./application/controllers/primeiro.php */