 <!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Consultar Clientes</title>
        <link  rel="stylesheet" href="../css/styleFormCons.css">
    
    </head>

     <body>
         <div class="form-header">
                <h1>Consultar Vendas</h1>
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
                        <td align="center"> <strong>Nome do Produto</strong></td>		
                        <td align="center"> <strong>Quantidade</strong></td>
                        <td align="center"> <strong>Valor do Desconto</strong></td>  
                        <td align="center"> <strong>Valor Total</strong></td> 
                        <td width="10"> <strong>Editar</strong></td>
                        <td width="10"> <strong>Deletar</strong></td>
                    </tr>

                    <?php
                        include("../conectarbd.php");
                        $selecionar= mysqli_query($conn, "SELECT * FROM tb_venda");
                        while ($campo= mysqli_fetch_array($selecionar)){?>
                            <tr>
                                <td align="center"><?=$campo["id_venda"]?></td>
                                <td align="center"><?=$campo["nome_produto"]?></td>
                                <td align="center"><?=$campo["qtde_itens"]?></td>
                                <td align="center"><?=$campo["valor_desconto"]?></td>
                                <td align="center"><?=$campo["valor_total"]?></td>
                                <td align="center"><a href="FormEditarVenda.php?editarid=<?php echo $campo ['id_venda'];?>">Editar</a></td>
                                <td align="center"><i><a href="ExcluirVenda.php?p=excluir&venda=<?php echo $campo['id_venda'];?>">Excluir</i></a></td>
                            </tr>
                    <?php }?>
                </table><br>
                 <div class="cancel-button" >
                     <a href="../index.html"><button type="submit" style="color:#fff">Cancelar</button></a>
                </div>
    </body>
</html>
