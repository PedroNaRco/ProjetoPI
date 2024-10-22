<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulario de Vendas</title>
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <div class="container">
            <div class="form-image">
                <img src="../img/Clean Elegant Typography Brand Logo.png" alt="">
            </div>
            <div class="form">
                <form id="cpfForm" action="CadastrarVenda.php" method="post">
                    <div class="form-header">
                        <div class="title">
                            <h1>Cadastre a Venda</h1>
                        </div>

                    </div>

                    <div class="input-group">
                        <div class="input-box">
                            <label>Nome do produto</label>
                            <input id="nome" type="text" name="nome_produto"  required>
                        </div>

                        <div class="input-box">
                            <label>Quantidade de Itens</label>
                            <input id="item" type="text" name="qtde_itens"  required>
                        </div>
                        <div class="input-box">
                            <label>Desconto</label>
                            <input id="desconto" type="text" name="valor_desconto"  required>
                        </div>

                        <div class="input-box">
                            <label>Valor Toral</label>
                            <input id="total" type="text" name="valor_total"  required>
                        </div>
                        
                    </div>
                    
                    <div class="continue-button" >
                        <button type="submit" style="color:#fff">Continuar</button>
                    </div>
                    <div class="continue-button" >
                        <a href="../index.html"> <button type="button" style="color:#fff">Cancelar</button>
                    </div>
                </form>
                
            </div>
        </div>

    </body>
</html>

