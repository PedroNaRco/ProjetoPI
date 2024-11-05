<!DOCTYPE html>
<html>

<head>
    <title>SisEventos</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="css/index1.css" />
</head>

<body>
    <nav class="menu">
        <ul>
            <li><a href="index.php">Home</a></li>
            
                <li><a href="#">Clientes</a>
                <ul>
                    <li><a href="Clientes/FormCadastrarCliente.php">Cadastrar</a></li>
                    <li><a href="Clientes/FormConsultarCliente.php">Consultar</a>
                </ul>
                </li>
            <li><a href="#">Reunião</a>
                <ul>
                    <li><a href="Reuniao/FormCadastraReuniao.php">Cadastrar</a></li>
                    <li><a href="Reuniao/FormConsultarReuniao.php">Consultar</a>
                </ul>
            </li>
            <li><a href="#">Contato</a>
                <ul>
                    <li><a href="Contato/FormCadastrarContato.php">Cadastrar</a></li>
                    <li><a href="Contato/FormConsultarContato.php">Consultar</a>
                </ul>
            </li>

            <li><a href="#">Serviços</a>
                <ul>
                    <li><a href="Servicos/FormCadastrarServicos.php">Cadastrar</a></li>
                    <li><a href="Servicos/FormConsultarServicos.php">Consultar</a>
                </ul>
            </li>

            <li><a href="#">Projetos</a>
                <ul>
                    <li><a href="Tipo_Projetos/FormCadastrarProjetos.php">Cadastrar</a></li>
                    <li><a href="Tipo_Projetos/FormConsultarProjetos.php">Consultar</a>
                </ul>
            </li>
            
            <li><a href="#">Tipo de Projeto</a>
                <ul>
                    <li><a href="Tipo_Projetos/FormCadastrarProjetos.php">Cadastrar</a></li>
                    <li><a href="Tipo_Projetos/FormConsultarProjetos.php">Consultar</a>
                </ul>
            </li>
            
            <li><a href="#">Agendamento</a>
                <ul>
                    <li><a href="Agendamento/FormCadastrarAgendamento.php">Cadastrar</a></li>
                    <li><a href="Agendamento/FormConsultarAgendamento.php">Consultar</a>
                </ul>
            </li>
            <li><a href="#">Fornecedores</a>
                <ul>
                    <li><a href="Fornecedores/FormCadastrarFornecedor.php">Cadastrar</a></li>
                    <li><a href="Fornecedores/FormConsultarFornecedor.php">Consultar</a>
                </ul>
            </li>
            <li><a href="#">Funcionario</a>
                <ul>
                    <li><a href="Funcionario/FormCadastrarFuncionario.php">Cadastrar</a></li>
                    <li><a href="Funcionario/FormConsultarFuncionario.php">Consultar</a>
                </ul>
            </li>
            <li><a href="login.html">Login</a></li>
        </ul>
        <!-- Div onde o nome do usuário será exibido -->
        
    </nav>
    <div id="exibirnome">
            <?php
            // Exibe o nome do usuário, se estiver logado
            if (isset($_SESSION['user_name'])) {
                echo "Olá, " . htmlspecialchars($_SESSION['user_name']) . "!";
            } else {
                echo "Bem-vindo!";
            }
            ?>
        </div>
</body>
