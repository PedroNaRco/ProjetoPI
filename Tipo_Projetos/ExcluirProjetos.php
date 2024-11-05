<?php

include("../conectarbd.php");

$recid= filter_input(INPUT_GET, 'projetos');



  if(mysqli_query($conn, "DELETE FROM tb_tipo_projeto WHERE id_tipo_projeto=$recid")) {

    echo "<script>alert('Dados excluidos com sucesso!'); window.location = 'FormConsultarProjetos.php';</script>";

  }else {

    echo "Não foi possível excluir os dados no Banco de Dados" . $recid . "<br>" . mysqli_error($conn);

  }

  mysqli_close($conn);



?>