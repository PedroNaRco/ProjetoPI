<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de agendamento</title>
    <link rel="stylesheet" href="../css/StyleFormAgend.css">
</head>
<body>
 
        <div class="form">
            <form action="CadastrarAgendamento.php" method="post">
                <div class="form-header">
                        <h1>Agendamento</h1>
                    
                    
                </div>

                <div class="input-group">
                   
                    <div class="input-box" style="width: 100%">
                        <label for="cliente">Cliente</label>
                        <input id="cliente" type="text" name="cliente"  placeholder="Digite o nome do cliente" required>
                    </div>
                    <div class="input-box">
                        <label for="data">Data</label>
                        <input id="data" type="date" name="data" placeholder="MM/DD/YYYY" required>
                    </div>
                    <!-- validação horario -->
                    <div class="input-box">
                        <label for="hora">Horário</label>
                        <input id="hora" type="text" name="hora" placeholder="HH:MM" required>
                    </div>
                    <div class="input-box" style="width: 100%" >
                        <label for="arquiteto" >Arquiteto responsável</label>
                        <input id="arquiteto" type="text" name="arquiteto"  placeholder="Digite o arquiteto" required>
                    </div>
                    
                    <div class="input-box" style="width: 100%">
                        <label for="descricao">Descrição</label>
                        <input id="descricao" type="text" name="descricao">
                    </div>

</div>
                <div class="continue-button" >
                    <button type="submit" style="color:#fff; font-size: 1rem;">Cadastrar</button>
               
                <button type="button" style="color:#fff"> <a href="../index.html">Cancelar</a></button>
                </div>
            </form>
            

        
    </div>
  
</body>
</html>

