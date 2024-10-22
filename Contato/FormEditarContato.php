<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Alterar contato</title>
        <link rel="stylesheet" href="../css/StylContato1.css">
    </head>
    <body>
        <?php
        include("../conectarbd.php");

        $recid = filter_input(INPUT_GET, 'editarid');

        $selecionar = mysqli_query($conn, "SELECT * FROM tb_contato WHERE id_contato=$recid");

        $campo = mysqli_fetch_array($selecionar);
        ?>


        <div class="form">
            <form action="EditarContato.php" method="post">
                <div class="form-header">
                    <div class="title">
                        <h1>Contato</h1>
                    </div>

                </div>

              <!esta linha cria um campo oculto para passar o id_cidade, pois senão ao clicar em Salvar o código não saberá onde salvar.-->
        <input type="hidden" name="id" value="<?=$campo["id_contato"]?>"> 

            <div class="input-group">

                    <div class="input-box">
                        <label for="cliente">Cliente</label>
                        <input id="cliente" type="cliente" name="cliente"  placeholder="Cliente" required value="<?=$campo["cliente"]?>">
                    </div>
                    <div class="input-box">
                        <label for="email">Email</label>
                        <input id="email" type="email" name="email" placeholder="Email" required value="<?=$campo["email"]?>">
                    </div>

                    <div class="input-box">
                        <label for="tipo">Tipo</label>
                        <select id="tipo" name="tipo" required value="<?=$campo["tipo"]?>">
                            <option value="">Selecione um tipo</option>
                            <option value="duvida">Dúvida</option>
                            <option value="sugestao">Sugestão</option>
                            <option value="reclamacao">Reclamação</option>
                        </select>
                    </div>
                    <div class="input-box">
                        <label for="descricao" >Descrição</label>
                        <textarea id="descricao" type="descricao" rows="3" cols="40" name="descricao"  placeholder="Descrição" required value="<?=$campo["descricao"]?>"></textarea>
                    </div>

                </div>
                <div class="continue-button" >
                    <button type="submit" style="color:#fff; font-size: 1rem;">Editar</button>

                    <button type="button" style="color:#fff"> <a href="../index.html">Cancelar</a></button>
                </div>
            </form>
        </div>

    </body>
</html>