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
   include "sessao.php";
   $datainicio=$_POST['datainicio'];
   $datafinal=$_POST['datafim'];
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
                      Registros Finalizados no Sistema
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
                     <th>Horario Saida</th>
                     <th>Local</th>
                     <th>Km Saida</th> 
                     <th>Km Retorno</th>
                     <th>Obs</th>                                           
                     <th>Opção</th>
                   </tr>
                 </thead>
               </thead>
               <tbody>
                <?php
                  $sql= $conn->query("select * from registro where situacao='FF' and cast( horariosaida as date )>='$datainicio' and cast( horariosaida as date )<='$datafinal' order by horariosaida");                                                                   
                while ($busca_sql = $sql->fetch_array()) {	
                 $codigo = $busca_sql['idregistro'];  
                 $placa = $busca_sql['placa'];
                 $condutor= $busca_sql['condutor'];
                 $horariosaida= $busca_sql['horariosaida'];
                 $local= $busca_sql['local'];
                 $kmsaida= $busca_sql['kmanterior'];
                 $kmretorno= $busca_sql['kmfinal'];
                 $obs= $busca_sql['obs'];
                 
                 $sql_query = $conn->query("SELECT nome FROM condutor WHERE idcondutor='$condutor'");
		             $busca_query = $sql_query->fetch_array(); 
			           $descricaocondutor= $busca_query['nome'];

                 
                 $kmsaida=number_format($kmsaida, 0, ",", ".");
                 $kmretorno=number_format($kmretorno, 0, ",", ".");
                 
                 $horariosaida=date('d/m/Y H:i:s', strtotime($horariosaida));  
                 

                echo "

                <tr>
                <td> $placa </td> 
                <td> $descricaocondutor</td>
                <td> $horariosaida</td>
                <td> $local</td>
                <td> $kmsaida</td>
                <td> $kmretorno</td>
                <td> $obs</td>     
               <td>
                <a href=../registros/editafinalizado?codigo=$codigo>
                <button type='button' class='default-blue-btn small-btn-table'>Visualizar</button>
                </a>
                </td>
                

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