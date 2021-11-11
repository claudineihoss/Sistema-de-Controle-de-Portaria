
<!DOCTYPE html>
<html>

<head>
			</head>
			
		

<?php
include "conecta.php";
include "funcao.php";
include "extensao.php";
include "menu.php";

$codigo=$_GET["codigo"];

$sql = "SELECT * FROM registro WHERE idregistro='$codigo'";

      $editar = mysql_query($sql);
      list($id,$veiculo,$condutor,$horariosaida,$horarioentrada,$local,$km,$situacao) = mysql_fetch_row($editar);
 
 $datacerta = date("Y-m-d\TH:i:s", strtotime($horariosaida)); 
 
 
 $sql1 = "SELECT idregistro,kmfinal FROM registro WHERE veiculo='$veiculo' and situacao='FF' ORDER BY idregistro DESC LIMIT 1";
 

      $editar1 = mysql_query($sql1);
      list($idultimo,$ultimakm) = mysql_fetch_row($editar1);
      
      if($ultimakm==''){
      $ultimakm=0;
      }
     

?>

 <section class="content">

            <!-- #END# Inline Layout | With Floating Label -->
            <!-- Multi Column -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                
                
                    <div class="card">
                        <div class="body">
                          <form name="formulario" action="<?php echo site_url("edita/finaliza")?>" method="POST">
                            <div class="row clearfix">
                           <div class="body">
                            <ul class="list-group">
                            <center>
                                <li class="list-group-item list-group-item-success"><h4>Registro Cadastrados no Sistema</h4></li>
                                </center>
                            </ul>
                        </div>
                                                        <div class="col-md-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <label>Veículo</label>
                                        <select class="form-control" name="veiculo" id="veiculo" disabled>
                                        <?php
			$sql_local = mysql_query("select * from veiculo");
			while ($list_local = mysql_fetch_array($sql_local)) {			
				$cod_veiculo = $list_local['idveiculo'];
				$descricao = $list_local['descricao'];
					$selecionado = '';
			if($cod_veiculo == $veiculo){
			$selecionado = 'selected';
      }
				echo "<option value='$cod_veiculo' $selecionado>$descricao</option>";	                                            
			}
			?>
                                       
                                    </select>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-md-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <label><center>Horário Saida</center> </label>
                                            <input type="datetime-local" class="form-control" name="horario" id="horaio" value="<?php echo $datacerta ?>" disabled>
                                            
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-md-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <label><center>Condutor</center> </label>
                                            <input type="text" class="form-control" name="condutor" id="condutor" value="<?php echo $condutor?>" disabled> 
                                            
                                        </div>
                                    </div>
                                    </div>
                                    
                                    <div class="col-md-3">
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
                                        <label><center>Horário Retorno</center> </label>
                                            <input type="datetime-local" class="form-control" name="retorno" id="retorno" required>
                                            
                                        </div>
                                    </div>
                                    </div>
                                    
                                            <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <label><center>Ultima Km</center> </label>
                                            <input type="text" class="form-control" name="ultimakm" value="<?php echo $ultimakm?>" disabled>
                                            
                                        </div>
                                    </div>
                                    </div>
                                    
                                        <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <label><center>Km Final</center> </label>
                                            <input type="text" class="form-control" name="km"  onKeyUp="maskIt(this,event,'###.###.###,##',true)" required>
                                            
                                        </div>
                                    </div>
                                    </div>
                                   


                              <input type="hidden" class="form-control" name="codigo" value="<?php echo $id?>">
                              <input type="hidden" class="form-control" name="kminicial" value="<?php echo $ultimakm?>" >  
                                
                         </div>
                            </div>
                            </div>
                            <center>
                            
                            	<button type="submit" class="btn btn-success waves-effect">Finalizar</button>
                            	&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="<?php echo site_url("lancamentos/abertos")?>">
                            <button type="button" class="btn btn-danger waves-effect">Voltar</button>
                            </a>
                           </center> 
                            
                            </form>
                                                      <div class="modal-footer">
                                                      <a href="../lancamentos/abertos">
	        <button type="button" class="btn btn-info waves-effect">Fechar</button>
        </a>

      
                      




</body>

</html>