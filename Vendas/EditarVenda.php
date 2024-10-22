<?php

include("../conectarbd.php");

$recid= filter_input(INPUT_POST, 'id');

$recnome_produto= filter_input(INPUT_POST, 'nome_produto');

$recqtde_itens= filter_input(INPUT_POST, 'qtde_itens');

$recvalor_desconto= filter_input(INPUT_POST, 'valor_desconto');

$recvalor_total= filter_input(INPUT_POST, 'valor_total');


  if(mysqli_query($conn, "UPDATE tb_venda SET nome_produto='$recnome_produto', qtde_itens='$recqtde_itens', valor_desconto='$recvalor_desconto', valor_total='$recvalor_total' WHERE id_venda=$recid")) {

    echo "<script>alert('Dados alterado com sucesso!'); window.location = 'FormConsultarVenda.php';</script>";

  }else {

    echo "Não foi possível alterar os dados no Banco de Dados" . $recid . "<br>" . mysqli_error($conn);

  }

  mysqli_close($conn);



?>