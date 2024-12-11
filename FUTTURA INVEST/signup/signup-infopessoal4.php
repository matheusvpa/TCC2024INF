<?php

if(isset($_POST['submit'])){

    include_once('conect.php');

    $genero = $_POST['gender'];
    $nacionalidade = $_POST['nationality'];
    $estad_nasc = $_POST['birth-state'];
    $naturalidade = $_POST['birthplace'];
    $n_mae = $_POST['mother-name'];
    $n_pai = $_POST['father-name'];
    $est_civil = $_POST['marital-status'];

    $resulta = mysqli_query($conexao, "INSERT INTO info_pessoal(genero, nacionalidade, estad_nasc, naturalidade, n_mae, n_pai, est_civil) VALUES('$genero','$nacionalidade','$estad_nasc','$naturalidade','$n_mae','$n_pai','$est_civil')");

    header("location: signup-profissional5.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pessoa</title>
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
        <h2>Cadastre seus dados pessoais</h2>
        <p>Preencha os campos abaixo</p>
    </div>
    <form id="personal-info-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="row mb-3">
            <div class="col-12 col-md-6 form-floating">
                <select class="form-select shadow-none" id="gender" name="gender" required>
                    <option selected disabled>Gênero</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Feminino">Feminino</option>
                    <option value="Outro">Outro</option>
                    <!-- Adicione outras opções de gênero conforme necessário -->
                </select>
            </div>
            <div class="col-12 col-md-6 form-floating">
                <input type="text" class="form-control shadow-none" id="nationality" name="nationality"
                       placeholder="Nacionalidade" required>
                <label for="nationality">Nacionalidade</label>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-12 col-md-6 form-floating">
                <input type="text" class="form-control shadow-none" id="birth-state" name="birth-state"
                       placeholder="Estado de Nascimento" required>
                <label for="birth-state">Estado de Nascimento</label>
            </div>
            <div class="col-12 col-md-6 form-floating">
                <input type="text" class="form-control shadow-none" id="birthplace" name="birthplace"
                       placeholder="Naturalidade" required>
                <label for="birthplace">Naturalidade</label>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-12 col-md-6 form-floating">
                <input type="text" class="form-control shadow-none" id="mother-name" name="mother-name"
                       placeholder="Nome da Mãe" required>
                <label for="mother-name">Nome da Mãe</label>
            </div>
            <div class="col-12 col-md-6 form-floating">
                <input type="text" class="form-control shadow-none" id="father-name" name="father-name"
                       placeholder="Nome do Pai" required>
                <label for="father-name">Nome do Pai</label>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-12 col-md-6 form-floating">
                <select class="form-select shadow-none" id="marital-status" name="marital-status" required>
                    <option selected disabled>Estado Civil</option>
                    <option value="Solteiro(a)">Solteiro(a)</option>
                    <option value="Casado(a)">Casado(a)</option>
                    <option value="Divorciado(a)">Divorciado(a)</option>
                    <option value="Viúvo(a)">Viúvo(a)</option>
                    <!-- Adicione outros estados civis conforme necessário -->
                </select>
            </div>
        </div>
        <!-- Aqui seria o botão de cadastrado para passar para a próxima página -->
        <div class="d-flex justify-content-end">
            <button id="save-btn" name="submit"type="submit" class="btn btn-primary">
                Cadastrar
            </button>
        </div>
    </form>
</div>
</body>
</html>
