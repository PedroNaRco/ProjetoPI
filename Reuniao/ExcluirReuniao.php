<?php

include("../conectarbd.php");

$recid= filter_input(INPUT_GET, 'reuniao');



  if(mysqli_query($conn, "DELETE FROM tb_reuniao WHERE id_reuniao=$recid")) {

    echo "<script>alert('Dados excluidos com sucesso!'); window.location = 'FormConsultarReuniao.php';</script>";

  }else {

    echo "Não foi possível excluir os dados no Banco de Dados" . $recid . "<br>" . mysqli_error($conn);

  }

  mysqli_close($conn);



?>