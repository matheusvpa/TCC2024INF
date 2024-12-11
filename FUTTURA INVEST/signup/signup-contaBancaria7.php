<?php

if(isset($_POST['submit'])){

    include_once('conect.php');

    $tipo = $_POST['bank-account-type'];
    $banco = $_POST['bank'];
    $agencia = $_POST['agency'];
    $conta = $_POST['account'];

    $resulta = mysqli_query($conexao, "INSERT INTO conta_bancaria(tipo, banco, agencia, conta) VALUES('$tipo','$banco','$agencia','$conta')");

    header("location: signin.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Patrimônio</title>
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
        <h2>Cadastre seus dados financeiros</h2>
        <p>Preencha os campos abaixo</p>
    </div>
    <form id="financial-info-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="row mb-3">
            <div class="col-12 col-md-6 form-floating">
                <select class="form-select shadow-none" id="bank-account-type" name="bank-account-type" required>
                    <option selected disabled>Tipo da Conta Bancária</option>
                    <option value="corrente">Corrente</option>
                    <option value="poupanca">Poupança</option>
                    <!-- Adicione outros tipos conforme necessário -->
                </select>
            </div>
            <div class="col-12 col-md-6 form-floating">
                <input type="text" class="form-control shadow-none" id="bank" name="bank"
                       placeholder="Banco" required size="5">
                <label for="bank">Banco</label>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-12 col-md-6 form-floating">
                <input type="text" class="form-control shadow-none" id="agency" name="agency"
                       placeholder="Agência" required size="4">
                <label for="agency">Agência</label>
            </div>
            <div class="col-12 col-md-6 form-floating">
                <input type="text" class="form-control shadow-none" id="account" name="account"
                       placeholder="Conta" required size="8">
                <label for="account">Conta</label>
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
