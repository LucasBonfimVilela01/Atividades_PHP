<!--Código HTML para o formulário-->
<!DOCTYPE html>
<html>
<head>
    <title>Tela de Cadastro</title>
    <!--Linka o bootstrap para o design do HTML-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div>&nbsp;</div>
    <div class="container">
        <h2>Cadastro</h2>
        <!--Cria um formulário com o método post, com a ação do controller/pessoaController.php-->
        <form method="POST", action="controller/pessoaController.php">

            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" placeholder="Digite o nome" name="nome">
            </div>

            <div class="form-group">
                <label for="endereco">Endereço:</label>
                <input type="text" class="form-control" id="endereco" placeholder="Digite o endereço" name="endereco">
            </div>

            <div class="form-group">
                <label for="bairro">Bairro:</label>
                <input type="text" class="form-control" id="bairro" placeholder="Digite o bairro" name="bairro">
            </div>

            <div class="form-group">
                <label for="cep">CEP:</label>
                <input type="text" class="form-control" id="cep" placeholder="Digite o CEP" name="cep">
            </div>

            <div class="form-group">
                <label for="cidade">Cidade:</label>
                <input type="text" class="form-control" id="cidade" placeholder="Digite a cidade" name="cidade">
            </div>

            <div class="form-group">
                <label for="estado">Estado:</label>
                <input type="text" class="form-control" id="estado" placeholder="Digite o estado" name="estado">
            </div>

            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="text" class="form-control" id="telefone" placeholder="Digite o telefone:" name="telefone">
            </div>

            <div class="form-group">
                <label for="celular">Celular:</label>
                <input type="text" class="form-control" id="celular" placeholder="Digite o celular:" name="celular">
            </div>
            <!--Cria o botão para submit -->
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>
</body>
</html>