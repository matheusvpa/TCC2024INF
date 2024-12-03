<?php

if(isset($_POST['submit'])){

    include_once('conect.php');

    $rendimento_mensal = $_POST['monthly-income'];
    $bem_imovel = $_POST['real-estate-assets'];
    $bem_movel = $_POST['movable-assets'];
    $outro_bem = $_POST['other-assets'];
    $vinculada_FT = $_POST['futtura-linked'];
    $pessoa_politica = $_POST['politically-exposed'];
    $cid_americana = $_POST['us-citizenship'];

    $result = mysqli_query($conexao, "INSERT INTO rendimentos(rendimento_mensal, bem_imóvel, bem_móvel, outro_bem, vinculada_FT, pessoa_politica, cid_americana) 
                                    VALUES('$rendimento_mensal','$bem_imovel','$bem_movel','$outro_bem','$vinculada_FT','$pessoa_politica','$cid_americana')");

    header("location: signup-contaBancaria7.php");
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
                <input type="text" class="form-control shadow-none" id="monthly-income" name="monthly-income"
                       placeholder="Rendimentos Mensais" required>
                <label for="monthly-income">Rendimentos Mensais</label>
            </div>
            <div class="col-12 col-md-6 form-floating">
                <input type="text" class="form-control shadow-none" id="real-estate-assets" name="real-estate-assets"
                       placeholder="Total em Bens Imóveis" required>
                <label for="real-estate-assets">Total em Bens Imóveis</label>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-12 col-md-6 form-floating">
                <input type="text" class="form-control shadow-none" id="movable-assets" name="movable-assets"
                       placeholder="Total de Bens Móveis" required>
                <label for="movable-assets">Total de Bens Móveis</label>
            </div>
            <div class="col-12 col-md-6 form-floating">
                <input type="text" class="form-control shadow-none" id="other-assets" name="other-assets"
                       placeholder="Total de Outros Bens" required>
                <label for="other-assets">Total de Outros Bens</label>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-12 col-md-6">
                <label for="futtura-linked" class="form-label">Pessoa vinculada a Futtura Invest?</label>
                <select class="form-select" id="futtura-linked" name="futtura-linked">
                    <option value="sim">Sim</option>
                    <option value="nao">Não</option>
                </select>
            </div>
            <div class="col-12 col-md-6">
                <label for="politically-exposed" class="form-label">Sou pessoa politicamente exposta?</label>
                <select class="form-select" id="politically-exposed" name="politically-exposed">
                    <option value="sim">Sim</option>
                    <option value="nao">Não</option>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-12 col-md-6">
                <label for="us-citizenship" class="form-label">Cidadania americana?</label>
                <select class="form-select" id="us-citizenship" name="us-citizenship">
                  <option value="sim">Sim</option>
                  <option value="nao">Não</option>
                </select>
                  </div>
                  </div>
                  <!-- Aqui seria o botão de cadastrado para passar para a próxima página -->
                  <div class="d-flex justify-content-end">
                  <button id="save-btn" name="submit" type="submit" class="btn btn-primary">
                    Cadastrar
                  </button>
            </div>                  
        </div>
    </form>
  </body>
</html>
