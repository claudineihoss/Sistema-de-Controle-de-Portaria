<!DOCTYPE html>
<html>
<head>
</head>

<?
include "menucad.php";
include "sessao.php";
include "funcao.php";
?>
<section class="content">
  <!-- #END# Inline Layout | With Floating Label -->
  <!-- Multi Column -->
  <div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="card">
        <div class="body">
          <form action="<?php echo site_url("cadastros/adicionaplaca")?>" method="POST">

           <div class="body">
              <center>
                <h4 class="default-size-header">Cadastro de Placas</h4>
              </center>
          </div>
          <div class="default-padding-inputs">
            <div class="col-md-6">
              <div class="form-group">
                <div class="form-line">
                  <label><center> Descrição </center> </label>
                  <input type="text" class="form-control" name="descricao" required>

                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <div class="form-line">
                  <label><center>Placa</center> </label>
                  <input type="text" class="form-control" name="placa" required>

                </div>
              </div>
            </div>
            <div class="col-md-6">
                                    <div class="form-group">
                                        <div>
                                        <label>Tipo</label>
                                        <select class="form-control" name="tipo">
                                       <?php                                       
                                $sql_query = $conn->query("select * from tipo order by cod_tipo");
																while($busca_query = $sql_query->fetch_array()){		
			                               	$cod_tipo=$busca_query ['cod_tipo'];
                                    	$descricao = $busca_query ['descricao'];
			                               echo "<option value='$cod_tipo'>$descricao</option>";
			                          }
		                        	?>
                                       
                                    </select>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div>
                                        <label><center>Ultima Km</center> </label>
                                            <input type="text" class="form-control" name="km" required onKeyUp="maskIt(this,event,'###.###.###,##',true)">
                                            
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