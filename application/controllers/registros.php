<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class registros extends CI_Controller {

function _construct(){
parent_construct();

}

				public function saida()
	{
		$this->load->view('registrosaida');
	}
  
  	public function adicionaregistro()
	{
		$this->load->view('adicionaregistro');
	}
  
  	public function pesquisaaberto()
	{
		$this->load->view('pesquisaaberto');
	}
  
  	public function editaregistro()
	{
		$this->load->view('editaregistro');
	}
  
  public function finalizaregistro()
	{
		$this->load->view('finalizaregistro');
	}
  
  public function pesquisafechado()
	{
		$this->load->view('pesquisafechado');
	}
  
   public function editafinalizado()
	{
		$this->load->view('editafinalizado');
	}
  
  public function abrirregistro()
	{
		$this->load->view('abrirregistro');
	}
  
  public function relatorioplaca()
	{
		$this->load->view('relatorioplaca');
	}
  
  public function dataplaca()
	{
		$this->load->view('dataplaca');
	}
  
   public function datacondutor()
	{
		$this->load->view('datacondutor');
	}
  
   public function relatoriocondutor()
	{
		$this->load->view('relatoriocondutor');
	}
  
   public function datafinalizados()
	{
		$this->load->view('datafinalizados');
	}
  
 
  
  

  
  
  
	
		
}

/* End of file welcome.php */
/* Location: ./application/controllers/primeiro.php */