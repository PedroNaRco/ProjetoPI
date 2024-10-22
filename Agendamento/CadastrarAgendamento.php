<?php include_once "../conectarbd.php"; ?>
<html>
    <body>
        <?php
        $cliente = $_POST["cliente"];
        $data = $_POST["data"];
        $hora = $_POST["hora"];
        $arquiteto = $_POST["arquiteto"];
        $descricao = $_POST["descricao"];
        $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
        mysqli_select_db($conn, '$dbname');
        $sql = "INSERT INTO tb_agendamento(cliente, data, hora, arquiteto, descricao) VALUES ('$cliente', '$data', '$hora','$arquiteto', '$descricao')";
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Seus dados foram salvos !'); window.location = '../index.html';</script>";
        } else {
            echo "Deu erro: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
        ?>
    </body>
</html>

