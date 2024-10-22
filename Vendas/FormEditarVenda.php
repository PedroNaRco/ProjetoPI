<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Venda</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php

      include("../conectarbd.php");

      $recid=filter_input(INPUT_GET, 'editarid');

      $selecionar= mysqli_query($conn, "SELECT * FROM tb_venda WHERE id_venda=$recid");

      $campo= mysqli_fetch_array($selecionar);

    ?>
    <div class="container">
        <div class="form-image">
            <img src="../img/Clean Elegant Typography Brand Logo.png" alt="">
        </div>
        <div class="form">
            <form action="EditarVenda.php" method="post">
                <div class="form-header">
                    <div class="title">
                        <h1>Alterar dados da Venda</h1>
                    </div>
                    
                </div>

                <!esta linha cria um campo oculto para passar o id_cidade, pois senão ao clicar em Salvar o código não saberá onde salvar.-->
        <input type="hidden" name="id" value="<?=$campo["id_venda"]?>"> 
        
                <div class="input-group">
                    <div class="input-box">
                        <label>Nome do Produto</label>
                        <input id="nome" type="text" name="nome_produto" required value="<?=$campo["nome_produto"]?>">
                    </div>
                    <div class="input-box">
                        <label>Quantidade</label>
                        <input id="qtde" type="text" name="qtde_itens"  required value="<?=$campo["qtde_itens"]?>">
                    </div>
                    <div class="input-box">
                        <label>Valor Desconto</label>
                        <input id="desconto" type="text" name="valor_desconto" required value="<?=$campo["valor_desconto"]?>">
                    </div>
                    <div class="input-box">
                        <label>Valor Total</label>
                        <input id="total" type="text" name="valor_total" required value="<?=$campo["valor_total"]?>">
                    </div>
                    
              
                    <div class="continue-button" >
                    <button type="submit" style="color:#fff">Continuar</button>
                </div>
            </form>
        </div>
    </div>
    
</body>
</html>
