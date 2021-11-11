<!DOCTYPE html>
<html>



<head>

 <style type="text/css">
  table{
   font-size: 11px; 
 }
</style>

<script>
	
	$('body').on('hidden.bs.modal', '.modal', function () {
    $(this).removeData('bs.modal').find(".modal-content").html("");
  });

</script>
</head>
<body>

  <b>	<!-- Modal -->
   <div class="modal fade bs-example-modal-lg" id="myModal" role="dialog" aria-labelledby="myLargeModalLabel" data-backdrop="static">
     <div class="modal-dialog modal-lg" role="document">
       <div class="modal-content">

       </div>
     </div>
   </div>
   <?
   include "menucad.php";

   $datainicio=$_POST['datainicio'];
   $datafinal=$_POST['datafim'];
   $condutorbusca=$_POST['condutor'];
   
   
   if($condutorbusca=='0'){
     $parametro="";
   }
   else{
    $parametro="and condutor='$condutorbusca'";
   }
  ?>
  <body class="theme-green">
    <section class="content">
      <!-- Basic Examples -->
      <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div >
            <div class="header">
              <div class="panel">
                <div class="panel-heading">
                  <center>
                    <h4>
                      Relatório por Condutor
                    </h4>
                  </center>
                </div>

              </div>
            </div>
            <div class="body">
              <div class="dataTable_wrapper">
                <table class="table dataTable js-exportable new-layout-table">
                  <thead>
                    <tr>                                   
                     <th>Placa</th>
                     <th>Condutor</th>
                     <th>Data Saida</th>
                     <th>Data Retorno</th>
                     <th>Local</th> 
                     <th>Situação</th>                                           
                   </tr>
                 </thead>
               </thead>
               <tbody>
                <?php
                
               $sql= $conn->query("select * from registro where cast( horariosaida as date )>='$datainicio' and cast( horariosaida as date )<='$datafinal' $parametro order by horariosaida");                                         
                while ($l = $sql->fetch_array()) {		
                 $codigo = $l['idregistro'];  
                 $placa = $l['placa'];
                 $condutor= $l['condutor'];
                 $horariosaida= $l['horariosaida'];
                 $horarioretorno= $l['horarioentrada'];
                 $local= $l['local'];
                 $situacao= $l['situacao'];
                 
                 if($horarioretorno==''){
                 $horarioretorno="0000-00-00";
                 }
                 
                 
                 
                 $sql_query = $conn->query("SELECT nome FROM condutor WHERE idcondutor='$condutor'");
		             $busca_query = $sql_query->fetch_array(); 
			           $descricaocondutor= $busca_query['nome'];
      
      if($situacao=='AA'){
      $situacao='Aberto';
      }
      else{
      $situacao='Fechado';
      }

                 
               
                 
                 $horariosaida=date('d/m/Y H:i:s', strtotime($horariosaida));
                 $horarioretorno=date('d/m/Y H:i:s', strtotime($horarioretorno));  
                 

                echo "

                <tr>
                <td> $placa </td> 
                <td> $descricaocondutor</td>
                <td> $horariosaida</td>
                 <td> $horarioretorno</td>
                <td> $local</td>
                <td> $situacao</td>
                </tr>
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