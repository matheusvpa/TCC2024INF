<?php

if(isset($_POST['submit'])){

    include_once('conect.php');

    $tipo_doc = $_POST['document-type'];
    $orgao_emissor = $_POST['issuing-authority'];
    $num_doc = $_POST['document-number'];
    $cpf = $_POST['cpf-number'];
    $data_emi = $_POST['issue-date'];
    $est_emissor = $_POST['issuing-state'];

    $result = mysqli_query($conexao, "INSERT INTO documentos(tipo_doc, orgao_emissor, num_doc, cpf, data_emi, est_emissor) VALUES('$tipo_doc','$orgao_emissor','$num_doc','$cpf','$data_emi','$est_emissor')");

    header("location: signup-infopessoal4.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Documento</title>
    <link rel="stylesheet" href="css/formulario.css" />
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
        <h2>Cadastre o seu documento</h2>
        <p>Preencha os campos abaixo</p>
    </div>
    <form id="document-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="row mb-3">
            <div class="col-12 col-md-6 form-floating">
                <select class="form-select shadow-none" id="document-type" name="document-type" required>
                    <option selected disabled>Tipo de Documento</option>
                    <option value="RG">RG</option>
                    <option value="CNH">CNH</option>
                    <option value="Passaporte">Passaporte</option>
                    <!-- Adicione outros tipos de documento conforme necessário -->
                </select>
            </div>
            <div class="col-12 col-md-6 form-floating">
                <input type="text" class="form-control shadow-none" id="issuing-authority" name="issuing-authority"
                       placeholder="Orgão Emissor" required>
                <label for="issuing-authority">Orgão Emissor</label>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-12 col-md-6 form-floating">
                <input type="text" class="form-control shadow-none" id="document-number" name="document-number"
                       placeholder="Número do Documento" required>
                <label for="document-number">Número do Documento</label>
            </div>
            <div class="col-12 col-md-6 form-floating">
                <input type="text" class="form-control shadow-none" id="cpf-number" name="cpf-number"
                       placeholder="Número do CPF" required>
                <label for="cpf-number">Número do CPF</label>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-12 col-md-6 form-floating">
                <input type="date" class="form-control shadow-none" id="issue-date" name="issue-date"
                       placeholder="Data de Emissão" required>
                <label for="issue-date">Data de Emissão</label>
            </div>
            <div class="col-12 col-md-6 form-floating">
                <input type="text" class="form-control shadow-none" id="issuing-state" name="issuing-state"
                       placeholder="Estado Emissor" required>
                <label for="issuing-state">Estado Emissor</label>
            </div>
        </div>
        <!-- Aqui seria o botão de cadastrado para passar para a próxima página -->
        <div class="d-flex justify-content-end">
            <button id="save-btn" name='submit' type="submit" class="btn btn-primary">
                Cadastrar
            </button>
        </div>
    </form>
</div>
</body>
</html>
