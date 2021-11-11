
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
                          <form action="<?php echo site_url("cadastro/adicionaveiculo")?>" method="POST">
                            <div class="row clearfix">
                           <div class="body">
                            <ul class="list-group">
                            <center>
                                <li class="list-group-item list-group-item-success"><h4>Cadastro de Veículos</h4></li>
                                </center>
                            </ul>
                        </div>
                        
                                   <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <label><center>Descrição</center> </label>
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