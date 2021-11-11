<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class cadastros extends CI_Controller {

function _construct(){
parent_construct();

}

				public function principal()
	{
		$this->load->view('principal');
	}
  
  public function cadusuario()
	{
		$this->load->view('cadusuario');
	}
  
   public function addusuario()
	{
		$this->load->view('adicionausu');
	}
  
   public function cadplaca()
	{
		$this->load->view('cadplaca');
	}
  
     public function adicionaplaca()
	{
		$this->load->view('adicionaplaca');
	}
  
   public function pesquisausu()
	{
		$this->load->view('pesquisausuario');
	}
  
   public function editausu()
	{
		$this->load->view('editausuario');
	}
  
  public function atualizausu()
	{
		$this->load->view('atualizausuario');
	}
  
   public function excluiusu()
	{
		$this->load->view('excluiusuario');
	}
  
   public function pesquisaplaca()
	{
		$this->load->view('pesquisaplaca');
	}
  
   public function editaplaca()
	{
		$this->load->view('editaplaca');
	}
  
  public function atualizaplaca()
	{
		$this->load->view('atualizaplaca');
	}
  
   public function excluiplaca()
	{
		$this->load->view('excluiplaca');
	}
  
    public function cadcondutor()
	{
		$this->load->view('cadcondutor');
	}
  
   public function addcondutor()
	{
		$this->load->view('adicionacondutor');
	}
  
   public function pesquisacondutores()
	{
		$this->load->view('pesquisacondutor');
	}
  
    public function editacondutores()
	{
		$this->load->view('editacondutor');
	}
	
   public function atualizacondutor()
	{
		$this->load->view('atualizacondutor');
	}
  
  public function excluicondutor()
	{
		$this->load->view('excluicondutor');
	}
  
    public function atualizaregistro()
	{
		$this->load->view('atualizaregistro');
	}
  
   public function finalizarregistro()
	{
		$this->load->view('finaliza');
	}
  
  public function excluiregistro()
	{
		$this->load->view('excluiregistro');
	}
	
	
	
	
	
	
	
	
	
	
		
}

/* End of file welcome.php */
/* Location: ./application/controllers/primeiro.php */