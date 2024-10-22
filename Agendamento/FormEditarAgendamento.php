<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Agendamento</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php

      include("../conectarbd.php");

      $recid=filter_input(INPUT_GET, 'editarid');

      $selecionar= mysqli_query($conn, "SELECT * FROM tb_agendamento WHERE id_agendamento=$recid");

      $campo= mysqli_fetch_array($selecionar);

    ?>

                <!esta linha cria um campo oculto para passar o id_cidade, pois senão ao clicar em Salvar o código não saberá onde salvar.-->
        <input type="hidden" name="id" value="<?=$campo["id_agendamento"]?>"> 
        
        <div class="form">
            <form action="EditarAgendamento.php" method="post">
                <div class="form-header">
                        <h1>Agendamento</h1>    
                </div>

                 <!esta linha cria um campo oculto para passar o id_cidade, pois senão ao clicar em Salvar o código não saberá onde salvar.-->
        <input type="hidden" name="id" value="<?=$campo["id_agendamento"]?>"> 
        
            <div class="input-group">
                   
                    <div class="input-box" style="width: 100%">
                        <label for="cliente">Cliente</label>
                        <input id="cliente" type="text" name="cliente"  placeholder="Digite o nome do cliente" required value="<?=$campo["cliente"]?>">
                    </div>
                    <div class="input-box">
                        <label for="data">Data</label>
                        <input id="data" type="date" name="data" placeholder="MM/DD/YYYY" required value="<?=$campo["data"]?>">
                    </div>
                    <!-- validação horario -->
                    <div class="input-box">
                        <label for="hora">Horário</label>
                        <input id="hora" type="text" name="hora" placeholder="HH:MM" required value="<?=$campo["hora"]?>">
                    </div>
                    <div class="input-box" style="width: 100%" >
                        <label for="arquiteto" >Arquiteto responsável</label>
                        <input id="arquiteto" type="text" name="arquiteto"  placeholder="Digite o arquiteto" required value="<?=$campo["arquiteto"]?>">
                    </div>
                    
                    <div class="input-box" style="width: 100%">
                        <label for="descricao">Descrição</label>
                        <input id="descricao" type="text" name="descricao" value="<?=$campo["descricao"]?>">
                    </div>

            </div>
                <div class="continue-button" >
                    <button type="submit" style="color:#fff; font-size: 1rem;">Cadastrar</button>
               
                    <button type="button" style="color:#fff"> <a href="FormConsultarAgendamento.php">Cancelar</a></button>
                </div>
            </form>
            

        
    </div>
    
    
</body>
</html>
