
<!DOCTYPE html>
<html>

<head>
</head>



<script>

  function troca(){

   if(document.getElementById("botao").value=='Editar'){
      document.getElementById("placa").disabled = false; // Habilitar
      document.getElementById("condutor").disabled = false; // Habilitar
      document.getElementById("datasaida").disabled = false; // Habilitar
      document.getElementById("local").disabled = false; // Habilitar
      document.getElementById("obs").disabled = false; // Habilitar
      document.getElementById("botao").value = 'Salvar';
      document.getElementById("excluir").disabled = true; // Habilitar
    }
    else{
      document.formulario.submit();
    }
  }


</script>

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
      $horariosaida= $busca_query['horariosaida'];
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

$kmanterior=number_format($kmanterior, 0, ",", ".");


?>
<section class="content">
  <!-- #END# Inline Layout | With Floating Label -->
  <!-- Multi Column -->
  <div class="row clearfix">
          <form name="formulario" action="<?php echo site_url("cadastros/atualizaregistro")?>" method="POST">
            <div >
               <div class="default-header-blue">
                <center><h4 class="default-size-header">Registros em Aberto no Sistema</h4></center>
                <div class="modal-footer" style="position: absolute;right: 15px; top: 0;">
                   <!-- <button type="button" class="btn btn-info waves-effect">Fechar</button> -->
                    <div class="line-btn-close"></div>
                    <div class="line-btn-close-2"></div>
                 </a>
               </div>
              </div>
              <div class="default-padding-inputs">
                 <div class="col-md-4">
                                    <div class="form-group">
                                        <div>
                                        <label>Placa</label>
                                        <select class="form-control show-tick" data-live-search="true" name="placa" id="placa" onChange="atualiza()";>
                                        <option></option>
                                       <?php
                                       $sql_veiculo = $conn->query("select * from veiculo order by placa");
																while($busca_veiculo= $sql_veiculo->fetch_array()){				
			                          	$cod_veiculo= $busca_veiculo['idveiculo'];
				                          $placa= $busca_veiculo['placa'];        
                                  $selecionado = '';
                      if($placa == $placacerta){
                       $selecionado = 'selected';
                     }
                     echo "<option value='$placa' $selecionado>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$placa</option>";	                                            
                   }
                   ?>
                    
                 </select>
                                        </div>
                                    </div>
                                    </div>
                
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div>
                                        <label><center>Condutor</center> </label>
                                           <select class="form-control show-tick" data-live-search="true" name="condutor" id="condutor" >
                                        <option></option>
                                       <?php
                                         $sql_query = $conn->query("select * from condutor order by nome");
																while($busca_query = $sql_query->fetch_array()){                                       	
				                            $cod_condutor= $busca_query['idcondutor'];
			                            	$nome= $busca_query['nome']; 
                                    $selecionado = '';
                                          if($cod_condutor== $condutor){
                                           $selecionado = 'selected'; 
                                           }                    
                                    echo "<option value='$cod_condutor' $selecionado>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$nome</option>";	                                            
                                     }
                                      ?>

                 </select>
                                            
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
                <label><center>Ultimo Km</center> </label>
                <input type="text" class="form-control" name="ultimokm" id="ultimokm" value="<?php echo $kmanterior?>" disabled onKeyUp="maskIt(this,event,'###.###.###,##',true)">

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
                <label><center>Obs</center> </label>
                <input type="text" class="form-control" name="obs" id="obs" value="<?php echo $obs?>" disabled>

              </div>
            </div>
          </div>
          

                

           </div>

           <input type="hidden" class="form-control" name="codigo" value="<?php echo $id?>"  >

        </div> 
       <center class="eng-buttons-modal">

         <input type="button"  id="botao"  class="default-blue-btn" value="Editar" onclick="troca()"> 
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