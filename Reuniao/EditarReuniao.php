<?php

include("../conectarbd.php");

$recid= filter_input(INPUT_POST, 'id');

$recnome_evento= filter_input(INPUT_POST, 'nome_evento');

$recdt_evento= filter_input(INPUT_POST, 'dt_evento');

$rechorario= filter_input(INPUT_POST, 'horario');

$reccliente= filter_input(INPUT_POST, 'cliente');

$recarquiteto_resp= filter_input(INPUT_POST, 'arquiteto_resp');

$recdescricao= filter_input(INPUT_POST, 'descricao');

  if(mysqli_query($conn, "UPDATE tb_reuniao SET nome_evento='$recnome_evento', dt_evento='$recdt_evento', horario='$rechorario', cliente='$reccliente', arquiteto_resp='$recarquiteto_resp', descricao='$recdescricao' WHERE id_reuniao=$recid")) {

    echo "<script>alert('Dados alterado com sucesso!'); window.location = 'FormConsultarReuniao.php';</script>";

  }else {

    echo "Não foi possível alterar os dados no Banco de Dados" . $recid . "<br>" . mysqli_error($conn);

  }

  mysqli_close($conn);



?>