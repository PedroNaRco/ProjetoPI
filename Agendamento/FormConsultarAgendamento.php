 <!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Consultar Agendamentos</title>
        <link  rel="stylesheet" href="../css/styleFormCons.css">
    
    </head>

     <body>
         <div class="form-header">
                <h1>Consultar Agendamentos Cadastrados</h1>
        </div>
                    </div>
                <table
                   width="100%"
                   border="1" 
                   bordercolor="black"
                   cellspacing="2" 	
                   cellpadding="5"
                   >
                    <tr class="title">
                        <td align="center"> <strong>ID</strong></td>	
                        <td align="center"> <strong>Cliente</strong></td>		
                        <td align="center"> <strong>Data</strong></td>
                        <td align="center"> <strong>Horário</strong></td>
                        <td align="center"> <strong>Arquiteto</strong></td>
                        <td align="center"> <strong>Descrição</strong></td>
                        <td width="10"> <strong>Editar</strong></td>
                        <td width="10"> <strong>Deletar</strong></td>
                    </tr>

                    <?php
                        include("../conectarbd.php");
                        $selecionar= mysqli_query($conn, "SELECT * FROM tb_agendamento");
                        while ($campo= mysqli_fetch_array($selecionar)){?>
                            <tr>
                                <td align="center"><?=$campo["id_agendamento"]?></td>
                                <td align="center"><?=$campo["cliente"]?></td>
                                <td align="center"><?=$campo["data"]?></td>
                                <td align="center"><?=$campo["hora"]?></td>
                                <td align="center"><?=$campo["arquiteto"]?></td>
                                <td align="center"><?=$campo["descricao"]?></td>
                                <td align="center"><a href="FormEditarAgendamento.php?editarid=<?php echo $campo ['id_agendamento'];?>">Editar</a></td>
                                <td align="center"><i><a href="ExcluirAgendamento.php?p=excluir&agendamento=<?php echo $campo['id_agendamento'];?>">Excluir</i></a></td>
                            </tr>
                    <?php }?>
                </table><br>
                 <div class="cancel-button" >
                     <button type="submit" style="color:#fff"><a href="../index.html">Cancelar</a></button>
                </div>
    </body>
</html>
