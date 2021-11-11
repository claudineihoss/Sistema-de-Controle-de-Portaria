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

<div class="modal fade bs-example-modal-lg" id="myModal" role="dialog" aria-labelledby="myLargeModalLabel" data-backdrop="static">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      
	    </div>
	  </div>
	</div>
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
                         Registros Finalizados no Sistema
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

                                            <th><p align="right">Veiculo</p></th>
                                             <th><p align="right">Condutor</p></th>
                                             <th><p align="right">Horário de Saída</p></th>
                                              <th><p align="right">Horário Retorno</p></th>
                                             <th><p align="right">Local</p></th>
                                             <th><p align="right">Km Retorno</p></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                      	$sql = "select * from registro where situacao='FF' order by 1";
	
	 $editar = mysql_query($sql);
     while ($l = mysql_fetch_array($editar)){	
   $id = $l['idregistro'];  
   $veiculo = $l['veiculo'];
	$horariosaida= $l['horariosaida'];
  $horarioretorno= $l['horarioentrada'];	
  $local= $l['local'];
  $condutor= $l['condutor'];
   $km= $l['KMFINAL'];
	
$horariosaida=date('d/m/Y H:i:s', strtotime($horariosaida));   

$horarioretorno=date('d/m/Y H:i:s', strtotime($horarioretorno)); 

$sqlveiculo = "select descricao from veiculo WHERE  idveiculo='$veiculo'";
                                	
	
	$editarveiculo = mysql_query($sqlveiculo);
list($descricaoveiculo) = mysql_fetch_row($editarveiculo);
	
$km=number_format($km, 2, ",", ".");	
	
	echo "
      
      <tr>
      <td> $descricaoveiculo</td> 
      <td> $condutor</td> 
     <td align=right>$horariosaida</td>
     <td align=right>$horarioretorno</td>
      <td align=right>$local</td>
     <td align=right>$km</td>
      <center>  

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