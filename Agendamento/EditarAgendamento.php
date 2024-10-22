<?php

include("../conectarbd.php");

$recid= filter_input(INPUT_POST, 'id');

$reccliente= filter_input(INPUT_POST, 'cliente');

$recdata= filter_input(INPUT_POST, 'data');

$rechora= filter_input(INPUT_POST, 'hora');

$recarquiteto= filter_input(INPUT_POST, 'arquiteto');

$recdescricao= filter_input(INPUT_POST, 'descricao');


  if(mysqli_query($conn, "UPDATE tb_agendamento SET cliente='$reccliente', data='$recdata', hora='$rechora', arquiteto='$recarquiteto', descricao='$recdescricao' WHERE id_agendamento=$recid")) {

    echo "<script>alert('Dados alterado com sucesso!'); window.location = 'FormConsultarAgendamento.php';</script>";

  }else {

    echo "Não foi possível alterar os dados no Banco de Dados" . $recid . "<br>" . mysqli_error($conn);

  }

  mysqli_close($conn);



?>