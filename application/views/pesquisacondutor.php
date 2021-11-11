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
                      Condutores Cadastrados no Sistema
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
                     <th>Nome</th>                                    
                     <th>Setor</th>                                          
                     <th style="text-align: end;">Opção</th>
                   </tr>
                 </thead>
               </thead>
               <tbody>
                <?php
                $sql= $conn->query("select * from condutor");                                                                     
                while ($busca_sql = $sql->fetch_array()) {	
                 $codigo = $busca_sql['idcondutor'];  
                 $nome = $busca_sql['nome'];
                 $setor = $busca_sql['setor'];
                 
                 
                  $sql_query = $conn->query("SELECT descricao FROM setores WHERE idsetor='$setor'");
		             $busca_query = $sql_query->fetch_array(); 
			           $descricaosetor= $busca_query['descricao'];
        

                echo "

                <tr>
                <td> $nome </td> 
                <td> $descricaosetor</td>
                <center>  
                <td align=right> <a href=../cadastros/editacondutores?codigo=$codigo>
                <button type='button' class='default-blue-btn small-btn-table'>Visualizar</button> </td>  
                </a> 

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