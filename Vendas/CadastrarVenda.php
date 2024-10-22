<?php include_once "../conectarbd.php"; ?>
<html>
    <body>
        <?php
        $nome_produto = $_POST["nome_produto"];
        $qtde_itens = $_POST["qtde_itens"];
        $valor_desconto = $_POST["valor_desconto"];
        $valor_total = $_POST["valor_total"];
        $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
        mysqli_select_db($conn, '$dbname');
        $sql = "INSERT INTO tb_venda(nome_produto, qtde_itens, valor_desconto, valor_total) VALUES ('$nome_produto', '$qtde_itens', '$valor_desconto','$valor_total')";
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Seus dados foram salvos !'); window.location = '../index.html';</script>";
        } else {
            echo "Deu erro: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
        ?>
    </body>
</html>

