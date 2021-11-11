
<!DOCTYPE html>
<html>

<head>
			</head>
			
		

<script>

function troca(){

       if(document.getElementById("botao").value=='Editar'){
      document.getElementById("descricao").disabled = false; // Habilitar
      document.getElementById("placa").disabled = false; // Habilitar
      document.getElementById("botao").value = 'Salvar';
      document.getElementById("excluir").disabled = true; // Habilitar
}
else{
document.formulario.submit();
}
}


</script>

<?php
include "conecta.php";
//include "sessao.php";
include "menu.php";

$codigo=$_GET["codigo"];

$sql = "SELECT * FROM veiculo WHERE idveiculo='$codigo'";

      $editar = mysql_query($sql);
      list($id,$descricao,$placa) = mysql_fetch_row($editar);
      


?>
       <section class="content">

            <!-- #END# Inline Layout | With Floating Label -->
            <!-- Multi Column -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                
                
                    <div class="card">
                        <div class="body">
                          <form name="formulario" action="<?php echo site_url("edita/atualizaveiculo")?>" method="POST">
                            <div class="row clearfix">
                           <div class="body">
                            <ul class="list-group">
                            <center>
                                <li class="list-group-item list-group-item-success"><h4>Veiculos Cadastrados no Sistema</h4></li>
                                </center>
                            </ul>
                        </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <label><center> Descrição </center> </label>
                                            <input type="text" class="form-control" name="descricao" id="descricao" value="<?php echo $descricao ?>" disabled>
                                            
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <label><center>Placa</center> </label>
                                            <input type="text" class="form-control" name="placa" id="placa" value="<?php echo $placa ?>" disabled>
                                            
                                        </div>
                                    </div>
                                    </div>


                              <input type="hidden" class="form-control" name="codigo" value="<?php echo $id?>"  
                                
                            </div>
                            </div>
                            <center>
                            
                            	<input type="button"  id="botao"  class="btn btn-success" value="Editar" onclick="troca()"> 
                            	&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="<?php echo site_url("edita/excluiveiculo?codigo=$id")?>">
                            <button type="button" class="btn btn-danger waves-effect">Excluir</button>
                            </a>
                           </center> 
                            
                            </form>
        </div> 
        </div>      
                      




</body>

</html>