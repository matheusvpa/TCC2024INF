<?php

if(isset($_POST['submit'])){

    include_once('conect.php');

    $nome = $_POST['issuing-authority'];
    $cpf = $_POST['cpf'];
    $email = $_POST['issue-email'];
    $senha = $_POST['password'];

    $result = mysqli_query($conexao, "INSERT INTO loging(nome, cpf, email, senha) VALUES('$nome','$cpf','$email','$senha')");

    header("location: signup-documentacao3.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Documento</title>
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
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
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
            <form id="document-form">
                <div class="row mb-3">
                    <div class="col-12 col-md-6 form-floating">
                        <input type="text" class="form-control shadow-none" id="issuing-authority" name="issuing-authority"
                            placeholder="Nome Completo" required>
                        <label for="issuing-authority">Nome Completo</label>
                    </div>
                    <div class="col-12 col-md-6 form-floating">
                        <input type="text" name="cpf" placeholder="CPF no formato: xxx.xxx.xxx-xx" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" autocomplete="off" class="form-control shadow-none cpfcadastro">
                        <label for="cpf">CPF</label>
                    </div>  
                </div>
                <div class="row mb-3">
                    <div class="col-12 col-md-6 form-floating">
                        <input type="email" class="form-control shadow-none" id="issue-email" name="issue-email"
                            placeholder="E-mail" required>
                        <label for="issue-email">E-mail</label>
                    </div>
                    <div class="col-12 col-md-6 form-floating">
                        <input type="password" class="form-control shadow-none" id="password" name="password"
                            placeholder="Senha" required>
                        <label for="password">Senha</label>
                    </div>
                </div>        
                <!-- Aqui seria o botão de cadastrado para passar para a próxima página -->
                <div class="d-flex justify-content-end">
                    <button id="save-btn" type="submit" name="submit"  class="btn btn-primary">
                        Cadastrar
                    </button>
                </div>
            </form>
        </div>
    </form>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const input = document.querySelector('.cpfcadastro');

        input.addEventListener('input', () => {
            let inputValue = input.value.replace(/\D/g, ''); // Remove todos os caracteres que não são dígitos

            if (inputValue.length > 11) {
                inputValue = inputValue.slice(0, 11); // Limita a 11 caracteres
            }

            let formattedValue = '';
            for (let i = 0; i < inputValue.length; i++) {
                if (i === 3 || i === 6) {
                    formattedValue += '.';
                } else if (i === 9) {
                    formattedValue += '-';
                }
                formattedValue += inputValue[i];
            }

            input.value = formattedValue;
        });
    });

    var documentNumberInput = document.getElementById('document-number');
    documentNumberInput.addEventListener('input', function () {
        this.value = this.value.replace(/\D/g, '');
    });
</script>

</body>
</html>
