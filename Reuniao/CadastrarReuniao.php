<?php include_once "../conectarbd.php"; ?>
<html>
    <body>
        <?php
        $nome_evento = $_POST["nome_evento"];
        $dt_evento = $_POST["dt_evento"];
        $horario = $_POST["horario"];
        $cliente = $_POST["cliente"];
        $arquiteto_resp = $_POST["arquiteto_resp"];
        $descricao = $_POST["descricao"];
        $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
        mysqli_select_db($conn, '$dbname');
        $sql = "INSERT INTO tb_reuniao(nome_evento, dt_evento, horario, cliente, arquiteto_resp, descricao) VALUES ('$nome_evento', '$dt_evento', '$horario','$cliente', '$arquiteto_resp', '$descricao')";
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Seus dados foram salvos !'); window.location = '../index.html';</script>";
        } else {
            echo "Deu erro: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
        ?>
    </body>
</html>

