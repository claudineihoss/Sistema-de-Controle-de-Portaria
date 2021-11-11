<!DOCTYPE html>
<html>
<head>
</head>

<?
include "menucad.php";
include "sessao.php";
?>
<section class="content">
  <!-- #END# Inline Layout | With Floating Label -->
  <!-- Multi Column -->
  <div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="card">
        <div class="body">
          <form action="<?php echo site_url("cadastros/addcondutor")?>" method="POST">

           <div class="body">
              <center>
                <h4 class="default-size-header">Cadastro de Condutores</h4>
              </center>
          </div>
          <div class="default-padding-inputs">
            <div class="col-md-6">
              <div class="form-group">
                <div class="form-line">
                  <label><center> Nome </center> </label>
                  <input type="text" class="form-control" name="nome" required>

                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <div>
                  <label>Setor</label>
                    <select class="form-control" name="setor">
                     <?php
                         $sql_query = $conn->query("select * from setores order by descricao");
													while($busca_query = $sql_query->fetch_array()){		
				              $cod_setor=$busca_query['idsetor'];
			              	$descricao = $busca_query['descricao'];
				             echo "<option value='$cod_setor'>$descricao</option>";
		                	}
			              ?>
                                       
                  </select>
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