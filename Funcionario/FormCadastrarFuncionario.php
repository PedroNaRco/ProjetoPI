<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Funcionarios</title>
    <link rel="stylesheet" href="../css/StyleFuncionario11.css">
    <script>
        function buscarEndereco() {
            var cep = document.getElementById('cep').value.replace(/\D/g, ''); // Remove caracteres não numéricos
            if (cep.length === 8) {
                var url = `https://viacep.com.br/ws/${cep}/json/`;

                fetch(url)
                    .then(response => response.json())
                    .then(data => {
                        if (!data.erro) {
                            // Preenche os campos do formulário com os dados retornados
                            document.getElementById('endereco').value = data.logradouro;
                            document.getElementById('bairro').value = data.bairro;
                            document.getElementById('cidade').value = data.localidade;
                            document.getElementById('estado').value = data.uf;
                        } else {
                            alert('CEP não encontrado.');
                            limparCampos();
                        }
                    })
                    .catch(error => {
                        console.error('Erro na requisição:', error);
                    });
            } else {
                alert('CEP inválido!'); // Exibir mensagem se o CEP não tiver 8 dígitos
                limparCampos();
            }
        }

        function limparCampos() {
            document.getElementById('endereco').value = '';
            document.getElementById('bairro').value = '';
            document.getElementById('cidade').value = '';
            document.getElementById('estado').value = '';
        }
    </script>
</head>
<body>
    <div class="form">
        <form action="CadastrarFuncionario.php" method="post">
            <div class="form-header">
                <div class="title">
                    <h1>Funcionarios</h1>
                </div>
            </div>

            <div class="input-group">
                <div class="input-box">
                    <label for="cliente">Nome</label>
                    <input id="cliente" type="text" name="nome" placeholder="Nome" required>
                </div>
                <div class="input-box">
                    <label for="data">Data_Nasc</label>
                    <input id="data" type="date" name="data_nasc" placeholder="Nasc" required>
                </div>
                <div class="input-box">
                    <label for="horario">Genero</label>
                    <input id="horario" type="text" name="genero" placeholder="Genero" required>
                </div>
                <div class="input-box">
                    <label for="estado_civil">Estado_Civil</label>
                    <input id="estado_civil" type="text" name="estado_civil" placeholder="Estado Civil" required>
                </div>
                <div class="input-box">
                    <label for="escolaridade">Escolaridade</label>
                    <input id="escolaridade" type="text" name="escolaridade" placeholder="Escolaridade" required>
                </div>
                <div class="input-box">
                    <label for="cep">Cep</label>
                    <input id="cep" type="text" name="cep" placeholder="Cep" maxlength="9" onblur="buscarEndereco()" required>
                </div>
                <div class="input-box">
                    <label for="endereco">Endereço</label>
                    <input id="endereco" type="text" name="endereco" placeholder="Endereço" required>
                </div>
                <div class="input-box">
                    <label for="n">N</label>
                    <input id="n" type="text" name="n" placeholder="N" required>
                </div>
                <div class="input-box">
                    <label for="complemento">Complemento</label>
                    <input id="complemento" type="text" name="complemento" placeholder="Complemento" required>
                </div>
                <div class="input-box">
                    <label for="bairro">Bairro</label>
                    <input id="bairro" type="text" name="bairro" placeholder="Bairro" required>
                </div>
                <div class="input-box">
                    <label for="cidade">Cidade</label>
                    <input id="cidade" type="text" name="cidade" placeholder="Cidade" required>
                </div>
                <div class="input-box">
                    <label for="estado">Estado</label>
                    <input id="estado" type="text" name="estado" placeholder="Estado" required>
                </div>
                <div class="input-box">
                    <label for="tel_cel">Tel_cel</label>
                    <input id="tel_cel" type="text" name="tel_cel" placeholder="Telefone/Celular" required>
                </div>
                <div class="input-box">
                    <label for="email">Email</label>
                    <input id="email" type="text" name="email" placeholder="Email" required>
                </div>
                <div class="input-box">
                    <label for="funcao">Funcao</label>
                    <input id="funcao" type="text" name="funcao" placeholder="Função" required>
                </div>
                <div class="input-box">
                    <label for="data_admissao">Data_Admissao</label>
                    <input id="data_admissao" type="date" name="data_admissao" placeholder="Data Admissão" required>
                </div>
                <div class="input-box">
                    <label for="salario">Salario</label>
                    <input id="salario" type="text" name="salario" placeholder="Salario" required>
                </div>
                <div class="input-box">
                    <label for="turno">Turno</label>
                    <input id="turno" type="text" name="turno" placeholder="Turno" required>
                </div>
                <div class="input-box">
                    <label for="cpf">Cpf</label>
                    <input id="cpf" type="text" name="cpf" placeholder="Cpf" required>
                </div>
                <div class="input-box">
                    <label for="rg">Rg</label>
                    <input id="rg" type="text" name="rg" placeholder="Rg" required>
                </div>
                <div class="input-box">
                    <label for="orgao_emissor">Orgão_emissor</label>
                    <input id="orgao_emissor" type="text" name="orgao_emissor" placeholder="Orgão" required>
                </div>
                <div class="input-box">
                    <label for="uf">Uf</label>
                    <input id="uf" type="text" name="uf" placeholder="Uf" required>
                </div>
                <div class="input-box">
                    <label for="data_expedicao">Data_expedição</label>
                    <input id="data_expedicao" type="date" name="data_expedicao" placeholder="Data de Expedição" required>
                </div>
                <div class="input-box">
                    <label for="ctps">Ctps</label>
                    <input id="ctps" type="text" name="ctps" placeholder="Ctps" required>
                </div>
                <div class="input-box">
                    <label for="data_emissao">Data_emissão</label>
                    <input id="data_emissao" type="date" name="data_emissao" placeholder="Data de Emissão" required>
                </div>
                <div class="input-box">
                    <label for="pis">Pis</label>
                    <input id="pis" type="text" name="pis" placeholder="Pis" required>
                </div>
                <div class="input-box">
                    <label for="banco">Banco</label>
                    <input id="banco" type="text" name="banco" placeholder="Banco" required>
                </div>
                <div class="input-box">
                    <label for="agencia">Agencia</label>
                    <input id="agencia" type="text" name="agencia" placeholder="Agencia" required>
                </div>
                <div class="input-box">
                    <label for="conta">Conta</label>
                    <input id="conta" type="text" name="conta" placeholder="Conta" required>
                </div>
                <div class="input-box">
                    <label for="tipo">Tipo</label>
                    <input id="tipo" type="text" name="tipo" placeholder="Tipo" required>
                </div>
                <div class="input-box">
                    <label for="pix">Pix</label>
                    <input id="pix" type="text" name="pix" placeholder="Pix" required>
                </div>
            </div>
            <div class="continue-button">
                <button type="submit" style="color:#fff; font-size: 1rem;">Cadastrar</button>
                <button type="button" style="color:#fff"> <a href="../index.html">Cancelar</a></button>
            </div>
        </form>
    </div>
</body>
</html>
