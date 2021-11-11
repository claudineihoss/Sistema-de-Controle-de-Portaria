
<!DOCTYPE html>
<html>

<head>
</head>



<?
include "menucad.php";
?>
<section class="content">
  <div >
    <!-- #END# Inline Layout | With Floating Label -->
    <!-- Multi Column -->
    <div >
      <div >
        <div >
          <div >
            <form action="<?php echo site_url("registros/relatoriocondutor")?>" method="POST">
              <div class='new-card'>
              <div >
               <div >
                <center class='default-header-blue'><h4 class='default-size-header'>Relatório por Placas</h4>
                </center>
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
                                    echo "<option value='$cod_condutor'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$nome</option>";	                                            
                                     }
                                      ?>

                 </select>
                                            
                                        </div>
                                    </div>
                                    </div>

              <div class="col-md-4">
                <div class="form-group">
                  <div>
                      <label><center>Data Inicial</center> </label>
                      <input type="date" class="form-control" name="datainicio" required>
                                            
                  </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="form-group">
                  <div>
                      <label><center>Data Final</center> </label>
                      <input type="date" class="form-control" name="datafim" required>
                                            
                  </div>
                </div>
            </div>

              <div class="col-md-3">
                <div class="form-group">

                </div>
              </div>
            </div>
            <br>
            <center class='eng-buttons-modal'>
              <button type="submit" class="default-red-btn">Visualizar</button>
            </center>  

          </form>
        </div>


      </div>
      <center>

      </section>

    </body>

    </html>