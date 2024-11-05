<?php

include("../conectarbd.php");

$recid= filter_input(INPUT_POST, 'id');

$recnome= filter_input(INPUT_POST, 'nome');

$recdescricao= filter_input(INPUT_POST, 'descricao');


  if(mysqli_query($conn, "UPDATE tb_tipo_projeto SET nome='$recnome', descricao='$recdescricao' WHERE id_tipo_projetos=$recid")) {

    echo "<script>alert('Dados alterado com sucesso!'); window.location = 'FormConsultarAgendamento.php';</script>";

  }else {

    echo "Não foi possível alterar os dados no Banco de Dados" . $recid . "<br>" . mysqli_error($conn);

  }

  mysqli_close($conn);



?>