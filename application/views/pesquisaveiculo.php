<!DOCTYPE html>
<html>
<link rel="icon" href="<?php echo base_url('img/logo.png');?>" type="image/x-icon">

<head>

 <style type="text/css">
table{
	font-size: 12px; 
	}
</style>


			</head>
			
<body>
<?
include "conecta.php";
//include "sessao.php";
include "menu.php";

//$valor= $_GET["valor"];

?>

    <section class="content">
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <div class="panel panel-success">
                        <div class="panel-heading">
                        <center>
                        <h3>
                         Veículos Cadastrados no Sistema
                            </h3>
                            </center>
                        </div>
                       
                    </div>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                              <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>

                                            <th><p align="right">Descrição</p></th>
                                             <th><p align="right">Placa</p></th>
                                            <th><p align="right">Opção</p></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                      	$sql = "select * from veiculo order by 1";
	
	 $editar = mysql_query($sql);
     while ($l = mysql_fetch_array($editar)){	
   $id = $l['idveiculo'];  
   $descricao = $l['descricao'];
	$placa= $l['placa'];
	
   
	
	
	
	echo "
      
      <tr>
      <td> $descricao</td> 
     <td align=right> $placa</td>
      <center>  
    <td align=right> <a href=../edita/editaveiculo?codigo=$id >
      <button type='button' class='btn btn-success btn-xs'>Visualizar</button> </td>  
 </a> 
                                                                
      </tr>
      ";
      }
                                      ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
            <!-- Exportable Table -->
    </section>


</body>

</html>