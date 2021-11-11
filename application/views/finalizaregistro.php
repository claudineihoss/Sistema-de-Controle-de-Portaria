
<!DOCTYPE html>
<html>

<head>
</head>




<?php
include "sessao.php";

include "menucad.php";
include "funcao.php";

$codigo=$_GET["codigo"];

$sql_query = $conn->query("SELECT * FROM registro WHERE idregistro='$codigo'");
			$busca_query = $sql_query->fetch_array();

			$id = $busca_query['idregistro'];
			$placacerta = $busca_query['placa'];
      $condutor = $busca_query['condutor'];
      $horariosaida = $busca_query['horariosaida'];
      $horarioentrada = $busca_query['horarioentrada'];
      $local = $busca_query['local'];
      $kmanterior = $busca_query['kmanterior'];
      $kmfinal = $busca_query['kmfinal'];
      $situacao = $busca_query['situacao'];
      $obs = $busca_query['obs'];


if($situacao=='AA'){
 $situacao="Aberto";
}
else{
$situacao="Fechado";
}

 $horariosaida = date("Y-m-d\TH:i:s", strtotime($horariosaida));

$kmanterior=number_format($kmanterior, 2, ",", ".");


 $sql_condutor= $conn->query("SELECT nome FROM condutor WHERE idcondutor='$condutor'");
		             $busca_condutor = $sql_condutor->fetch_array(); 
			           $descricaocondutor= $busca_condutor['nome'];



?>
<section class="content">
  <!-- #END# Inline Layout | With Floating Label -->
  <!-- Multi Column -->
  <div class="row clearfix">
          <form name="formulario" action="<?php echo site_url("cadastros/finalizarregistro")?>" method="POST">
            <div >
               <div class="default-header-blue">
                <center><h4 class="default-size-header">Registros no Sistema</h4></center>
                <div class="modal-footer" style="position: absolute;right: 15px; top: 0;">
                   <!-- <button type="button" class="btn btn-info waves-effect">Fechar</button> -->
                    <div class="line-btn-close"></div>
                    <div class="line-btn-close-2"></div>
                 </a>
               </div>
              </div>
              <div class="col-md-4">
                  <div class="form-group">
                    <div class="form-line">
                      <label><center>Placa</center> </label>
                      <input type="text" class="form-control" name="placa" id="placa" value="<?php echo $placacerta ?>" disabled>

                    </div>
                  </div>
                </div>
                
                 <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <label><center>Data Saída</center> </label>
                                            <input type="datetime-local" class="form-control" name="datasaida" id="datasaida" value="<?php echo $horariosaida ?>" disabled>
                                            
                                        </div>
                                    </div>
                                    </div>
                                    
                                     <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <label><center>Data Retorno</center> </label>
                                            <input type="datetime-local" class="form-control" name="dataretorno" id="dataretorno" required>
                                            
                                        </div>
                                    </div>
                                    </div>
                
                
                <div class="col-md-4">
                  <div class="form-group">
                    <div class="form-line">
                      <label><center>Condutor</center> </label>
                      <input type="text" class="form-control" name="condutor" id="condutor" value="<?php echo $descricaocondutor ?>" disabled>

                    </div>
                  </div>
                </div>
                
                 <div class="col-md-4">
            <div class="form-group">
              <div class="form-line">
                <label><center>Local</center> </label>
                <input type="text" class="form-control" name="local" id="local" value="<?php echo $local?>" disabled>

              </div>
            </div>
          </div>
                

              
               <div class="col-md-4">
            <div class="form-group">
              <div class="form-line">
                <label><center>Ultimo Km</center> </label>
                <input type="text" class="form-control" name="ultimokm" id="ultimokm" value="<?php echo $kmanterior?>" onKeyUp="maskIt(this,event,'###.###.###,##',true)">

              </div>
            </div>
          </div>
          
         
          
<div class="col-md-4">
            <div class="form-group">
              <div class="form-line">
                <label><center>Km Retorno</center> </label>
                <input type="text" class="form-control" name="kmretorno" id="kmretorno" required  onKeyUp="maskIt(this,event,'###.###.###,##',true)">

              </div>
            </div>
          </div>
          
          
          
          <div class="col-md-4">
            <div class="form-group">
              <div class="form-line">
                <label><center>Obsernvacao</center> </label>
                <input type="text" class="form-control" name="obs" id="obs"  value="<?php echo $obs?>">

              </div>
            </div>
          </div>
          
          <div class="col-md-4">
            <div class="form-group">
              <div class="form-line">
                <label><center>Situação</center> </label>
                <input type="text" class="form-control" name="situacao" id="situacao"  value="Aberto" disabled>

              </div>
            </div>
          </div>
                

           </div>

           <input type="hidden" class="form-control" name="codigo" value="<?php echo $id?>"  >

        </div> 
       <center class="eng-buttons-modal">

         <input type="submit"  id="botao"  class="default-blue-btn" value="Finalizar"> 
         &nbsp;&nbsp;&nbsp;&nbsp;
         <a href="<?php echo site_url("cadastros/excluiregistro?codigo=$id")?>">
          <button type="button" class="default-red-btn">Excluir</button>
        </a>
      </center> 

    </form>
    

 </div>
</div>
</div>
</div>
<!-- #END# Multi Column -->
</div>


</body>

</html>