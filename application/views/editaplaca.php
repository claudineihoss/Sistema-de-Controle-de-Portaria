
<!DOCTYPE html>
<html>

<head>
</head>



<script>

  function troca(){

   if(document.getElementById("botao").value=='Editar'){
      document.getElementById("descricao").disabled = false; // Habilitar
      document.getElementById("placa").disabled = false; // Habilitar
      document.getElementById("tipo").disabled = false; // Habilitar
      document.getElementById("ultimokm").disabled = false; // Habilitar
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

$sql_query = $conn->query("SELECT * FROM veiculo WHERE idveiculo='$codigo'");
			$busca_query = $sql_query->fetch_array();

			$id = $busca_query['idveiculo'];
			$descricao = $busca_query['descricao'];
      $placa = $busca_query['placa'];
      $tipo = $busca_query['tipo'];
      $ultimokm = $busca_query['ultimokm'];

      $ultimokm=number_format($ultimokm, 0, ",", ".");


?>
<section class="content">
  <!-- #END# Inline Layout | With Floating Label -->
  <!-- Multi Column -->
  <div class="row clearfix">
          <form name="formulario" action="<?php echo site_url("cadastros/atualizaplaca")?>" method="POST">
            <div >
               <div class="default-header-blue">
                <center><h4 class="default-size-header">Cadastro de Placas</h4></center>
                <div class="modal-footer" style="position: absolute;right: 15px; top: 0;">
                   <!-- <button type="button" class="btn btn-info waves-effect">Fechar</button> -->
                    <div class="line-btn-close"></div>
                    <div class="line-btn-close-2"></div>
                 </a>
               </div>
              </div>
              <div class="default-padding-inputs">
                <div class="col-md-3">
                  <div class="form-group">
                    <div class="form-line">
                      <label><center> Descrição </center> </label>
                      <input type="text" class="form-control" name="descricao" id="descricao" value="<?php echo $descricao ?>" disabled>

                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <div class="form-line">
                      <label><center>Placa</center> </label>
                      <input type="text" class="form-control" name="placa" id="placa" value="<?php echo $placa ?>" disabled>

                    </div>
                  </div>
                </div>
                
                <div class="col-md-3">
              <div class="form-group">
                <div class="form-line">
                  <label>Tipo</label>
                  <select class="form-control" name="tipo" id="tipo">
                    <?php
                    $sql_query = $conn->query("select * from tipo order by cod_tipo");
											while($busca_query = $sql_query->fetch_array()){		
                      $cod_tipo= $busca_query['cod_tipo'];
                      $descricao =$busca_query['descricao'];
                      $selecionado = '';
                      if($cod_tipo == $tipo){
                       $selecionado = 'selected';
                     }
                     echo "<option value='$cod_tipo' $selecionado>$descricao</option>";	                                            
                   }
                   ?>

                 </select>
               </div>
             </div>
           </div>
               <div class="col-md-3">
            <div class="form-group">
              <div class="form-line">
                <label><center>Ultimo Km</center> </label>
                <input type="text" class="form-control" name="ultimokm" id="ultimokm" value="<?php echo $ultimokm?>" disabled onKeyUp="maskIt(this,event,'###.###.###,##',true)">

              </div>
            </div>
          </div>
                

           </div>

           <input type="hidden" class="form-control" name="codigo" value="<?php echo $id?>"  >
            <input type="hidden" class="form-control" name="placaantiga" value="<?php echo $placa?>"  >

        </div> 
       <center class="eng-buttons-modal">

         <input type="button"  id="botao"  class="default-blue-btn" value="Editar" onclick="troca()"> 
         &nbsp;&nbsp;&nbsp;&nbsp;
         <a href="<?php echo site_url("cadastros/excluiplaca?codigo=$id&&placa=$placa")?>">
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