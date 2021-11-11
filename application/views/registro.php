
<!DOCTYPE html>
<html>

<head>
			</head>

<body>			
		

<?
include "conecta.php";
//include "sessao.php";
include "menu.php";


?>

     <section class="content">

            <!-- #END# Inline Layout | With Floating Label -->
            <!-- Multi Column -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                
                
                    <div class="card">
                        <div class="body">
                          <form action="<?php echo site_url("lancamentos/addregistro")?>" method="POST">
                            <div class="row clearfix">
                           <div class="body">
                            <ul class="list-group">
                            <center>
                                <li class="list-group-item list-group-item-success"><h4>Registros de Saída</h4></li>
                                </center>
                            </ul>
                        </div>
                        
                                                              <div class="col-md-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <label>Placa</label>
                                        <select class="form-control" name="veiculo" required>
                                       <?php
			$sql_centro = mysql_query("select * from veiculo order by descricao");
			while ($list_centro = mysql_fetch_array($sql_centro)) {			
				$codigoveiculo= $list_centro['idveiculo'];
				$descricao = $list_centro['descricao'];
				echo "<option value='$codigoveiculo'>$descricao</option>";
			}
			?>
                                       
                                    </select>
                                        </div>
                                    </div>
                                </div>
                        
                                   <div class="col-md-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <label><center>Data</center> </label>
                                            <input type="datetime-local" class="form-control" name="data" required>
                                            
                                        </div>
                                    </div>
                                    </div>
                                    
                                       <div class="col-md-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <label><center>Condutor</center> </label>
                                            <input type="text" class="form-control" name="condutor" required>
                                            
                                        </div>
                                    </div>
                                    </div>
                                    
                                    <div class="col-md-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <label><center>Local</center> </label>
                                            <input type="text" class="form-control" name="local" required>
                                            
                                        </div>
                                    </div>
                                    </div>
                                    
                     
                                    
                        
                        
                        
                                    
     
                                    
                                
                                    
                                    <br>
                                    <center>
                                      <button type="submit" class="btn btn-success waves-effect">Cadastrar</button>
                                    </center>  
                            
                            </form>
                                </div>
                               
                            
        </div>
        <center>
                                  
    </section>

</body>

</html>