<?php

include("../conectarbd.php");

$recid= filter_input(INPUT_GET, 'agendamento');



  if(mysqli_query($conn, "DELETE FROM tb_agendamento WHERE id_agendamento=$recid")) {

    echo "<script>alert('Dados excluidos com sucesso!'); window.location = 'FormConsultarAgendamento.php';</script>";

  }else {

    echo "Não foi possível excluir os dados no Banco de Dados" . $recid . "<br>" . mysqli_error($conn);

  }

  mysqli_close($conn);



?>