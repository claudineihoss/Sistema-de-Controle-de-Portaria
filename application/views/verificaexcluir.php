<?php

$codigo=$_GET["codigo"];

echo "
<script> 
  if( confirm( 'TEM CERTEZA QUE DESEJA EXCLUIR ??' ) ) {
   window.location='../lancamentos/excluiaberto?codigo=$codigo';
  } else {
     window.location='../lancamentos/abertos';
  } 
 </script>";
 
?>
