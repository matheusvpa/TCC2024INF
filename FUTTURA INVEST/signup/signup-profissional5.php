<?php

if(isset($_POST['submit'])){

    include_once('conect.php');

    $ocup_profissional = $_POST['occupation'];
    $inst_trabalho = $_POST['work-institution'];
    $cnpj = $_POST['cnpj'];

    $resulta = mysqli_query($conexao, "INSERT INTO profissional(ocup_profissional, inst_trabalho, cnpj) VALUES('$ocup_profissional','$inst_trabalho','$cnpj')");

    header("location: signup-rendimentos6.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Profissional</title>
    <link rel="stylesheet" href="formulario.css" />
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
          crossorigin="anonymous"/>
    <!-- Bootstrap icons -->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css"/>
</head>
<body id="checkout-page">
<div id="fade" class="hide">
    <div id="loader" class="spinner-border text-info hide" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
    <div id="message" class="hide">
        <div class="alert alert-light" role="alert">
            <h4>Mensagem:</h4>
            <p></p>
            <button id="close-message" type="button" class="btn btn-secondary">
                Fechar
            </button>
        </div>
    </div>
</div>
<div id="order-form-container" class="container p-6 my-md-4 px-md-0">
    <div id="form-header" class="text-center">
        <div class="logotipo-container">
            <img src="../img/LogotipoFuttura.png" class="logotipo">
        </div>
        <h2>Cadastre suas informações profissionais</h2>
        <p>Preencha os campos abaixo</p>
    </div>
    <form id="professional-info-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="row mb-3">
            <div class="col-12 col-md-6 form-floating">
                <select class="form-select shadow-none" id="occupation" name="occupation" required>
                    <option selected disabled>Ocupação Profissional</option>
                    <option value="Sócio-minoritário">Sócio-minoritário</option>
                    <option value="Sócio-administrador">Sócio-administrador</option>
                    <option value="Gerente">Gerente</option>
                    <option value="Advogado">Advogado</option>
                    <option value="Médico">Médico</option>
                    <option value="Engenheiro">Engenheiro</option>
                    <option value="Professor">Professor</option>
                    <option value="Autônomo">Autônomo</option>
                    <option value="Investidor-Anjo">Investidor-Anjo</option>
                    <option value="Assessor de Investimentos">Assessor de Investimentos</option>
                    <option value="Empresário">Empresário</option>
                    <option value="Arquiteto">Arquiteto</option>
                    <option value="Psicólogo">Psicólogo</option>
                    <option value="Dentista">Dentista</option>
                    <option value="Consultor">Consultor</option>
                    <option value="Corretor de Imóveis">Corretor de Imóveis</option>
                    <option value="Designer">Designer</option>
                    <option value="Contador">Contador</option>
                    <option value="Administrador">Administrador</option>
                    <option value="Chef de Cozinha">Chef de Cozinha</option>
                    <option value="Farmacêutico">Farmacêutico</option>
                    <option value="Analista de Sistemas">Analista de Sistemas</option>
                    <option value="Publicitário">Publicitário</option>
                    <option value="Outros">Outros</option>
                    <!-- Adicione outras profissões conforme necessário -->
                </select>
            </div>
            <div class="col-12 col-md-6 form-floating">
                <input type="text" class="form-control shadow-none" id="work-institution" name="work-institution"
                       placeholder="Instituição de Trabalho" required>
                <label for="work-institution">Instituição de Trabalho</label>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-12 col-md-6 form-floating">
                <input type="text" class="form-control shadow-none" id="cnpj" name="cnpj"
                       placeholder="CNPJ" required>
                <label for="cnpj">CNPJ</label>
            </div>
        </div>
        <!-- Aqui seria o botão de cadastrado para passar para a próxima página -->
        <div class="d-flex justify-content-end">
            <button id="save-btn" name="submit" type="submit" class="btn btn-primary">
                Cadastrar
            </button>
        </div>
    </form>
</div>
</body>
</html>
