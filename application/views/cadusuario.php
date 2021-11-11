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
          <form action="<?php echo site_url("cadastros/addusuario")?>" method="POST">

           <div class="body">
              <center>
                <h4 class="default-size-header">Cadastro de Usuários</h4>
              </center>
          </div>
          <div class="default-padding-inputs">
            <div class="col-md-4">
              <div class="form-group">
                <div class="form-line">
                  <label><center> Nome </center> </label>
                  <input type="text" class="form-control" name="nome" required>

                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <div class="form-line">
                  <label><center>login</center> </label>
                  <input type="text" class="form-control" name="login" required>

                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <div class="form-line">
                  <label><center>Senha</center> </label>
                  <input type="password" class="form-control" name="senha" required>

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