<?php

include_once('conect_adm.php');

  if(!empty($_GET['id'])){

    $id = $_GET['id'];
    $sqlSelect = "SELECT * FROM loging WHERE id='$id'";
    $result = $conex->query($sqlSelect);

    if($result->num_rows > 0){

      while($user_data = mysqli_fetch_assoc($result)){

        $nome = $user_data['nome'];
        $cpf = $user_data['cpf'];
        $email = $user_data['email'];
        $senha = $user_data['senha'];
      }
    }

    else{

      header('Location: sistema.php');

    }

  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário FUTTURA INVEST</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
        }
        fieldset{
            border: 3px solid dodgerblue;
        }
        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #update{
            background-image: linear-gradient(to right,rgb(0, 92, 197), rgb(90, 20, 220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #update:hover{
            background-image: linear-gradient(to right,rgb(0, 80, 172), rgb(80, 19, 195));
        }
    </style>
</head>
<body>
    <a href="sistema.php">Voltar</a>
    <div class="box">
        <form action="saveEdit.php" method="POST">
            <fieldset>
                <legend><b>Gerenciar Informações</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" value="<?php echo $nome?>" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" value="<?php echo $email?>" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="cpf" id="cpf" class="inputUser cpfcadastro" value="<?php echo $cpf?>" required>
                    <label for="cpf" class="labelInput">CPF</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="senha" id="senha" class="inputUser" value="<?php echo $senha?>" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <input type="hidden" name='id' value="<?php echo $id?>">
                <input type="submit" name="update" id="update">
            </fieldset>
        </form>
    </div>

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
