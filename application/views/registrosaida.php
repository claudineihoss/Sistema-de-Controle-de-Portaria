<!DOCTYPE html>
<html>
<head>

<script>  
  function atualiza(){
  var placa=document.getElementById("placa").value;
    window.location.href ='../registros/saida?placa='+placa;
}
  
</script>
</head>

<?
include "menucad.php";
include "sessao.php";
include "funcao.php";

if (empty($_GET['placa'])) { 
      $placacerta="";
      $ultimokm="";
      }
      else{
      $placacerta=$_GET['placa'];      
       $sql_km = $conn->query("SELECT ultimokm FROM veiculo WHERE placa='$placacerta'");
		             $busca_km = $sql_km->fetch_array(); 
			           $ultimokm= $busca_km['ultimokm']; 
                $ultimokm=number_format($ultimokm, 2, ",", ".");
      }

?>
<section class="content">
  <!-- #END# Inline Layout | With Floating Label -->
  <!-- Multi Column -->
  <div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="card">
        <div class="body">
          <form action="<?php echo site_url("registros/adicionaregistro")?>" method="POST">

           <div class="body">
              <center>
                <h4 class="default-size-header">Registro Saida Veiculos</h4>
              </center>
          </div>
          <div class="default-padding-inputs">
            <div class="col-md-6">
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
                      if($placa==$placacerta){
                       $selecionado = 'selected';
                     }
                     echo "<option value='$placa' $selecionado>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$placa</option>";	                                            
                   }
                   ?>
                    
                 </select>
                                        </div>
                                    </div>
                                    </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <label><center>Data</center> </label>
                                            <input type="datetime-local" class="form-control" name="data" required>
                                            
                                        </div>
                                    </div>
                                    </div>
                                    
                                     <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <label><center>Ultima Km</center> </label>
                                            <input type="text" class="form-control" name="km"  value="<?php echo $ultimokm ?>" disabled>
                                            
                                        </div>
                                    </div>
                                    </div>
                                    
                                     <div class="col-md-6">
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
                                    echo "<option value='$cod_condutor'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$nome</option>";	                                            
                                     }
                                      ?>

                 </select>
                                            
                                        </div>
                                    </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <div>
                                        <label><center>Local</center> </label>
                                            <input type="text" class="form-control" name="local">
                                            
                                        </div>
                                    </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <div>
                                        <label><center>Observação</center> </label>
                                            <input type="text" class="form-control" name="obs">
                                            
                                        </div>
                                    </div>
                                    </div>
                                                                        
          </div>
        <center>
          <button type="submit" class="default-red-btn">Cadastrar</button>
        </center>  

      </form>
    </div>


  </div>
  <center>

  </section>

</body>

</html>