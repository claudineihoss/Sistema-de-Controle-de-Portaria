
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
                          <form action="<?php echo site_url("lancamentos/relatorio")?>" method="POST">
                            <div class="row clearfix">
                           <div class="body">
                            <ul class="list-group">
                            <center>
                                <li class="list-group-item list-group-item-success"><h4>Relatórios por Placa</h4></li>
                                </center>
                            </ul>
                        </div>
                        
                                                              <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <label>Placa</label>
                                        <select class="form-control" name="veiculo" required>
                                        <option value="0">Todas</option>
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
                        
                                   <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <label><center>Data Inicio</center> </label>
                                            <input type="date" class="form-control" name="datainicio" required>
                                            
                                        </div>
                                    </div>
                                    </div>
                                    
                                     <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <label><center>Fim</center> </label>
                                            <input type="date" class="form-control" name="datafim" required>
                                            
                                        </div>
                                    </div>
                                    </div>
                                    
            
                                
                                    
                                    <br>
                                    <center>
                                      <button type="submit" class="btn btn-success waves-effect">Visualizar</button>
                                    </center>  
                            
                            </form>
                                </div>
                               
                            
        </div>
        <center>
                                  
    </section>

</body>

</html>