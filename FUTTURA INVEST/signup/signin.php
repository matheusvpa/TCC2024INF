<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://kit.fontawesome.com/cf6fa412bd.js" crossorigin="anonymous"></script>
</head>

<style> 
@import url('https://fonts.googleapis.com/css2?family=Poppins&family=Roboto:wght@100;300;400;500;700;900&family=Source+Sans+Pro:wght@200;300;400;600;700;900&display=swap');
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif; 
}

body {
  width: 100vw;
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
}

.container {
  background-color: whitesmoke;
  padding: 6px;
  width: 350px;
  height: 700px;
  display: flex;
  flex-direction: column;
  align-items: center;
  position: relative;
  overflow: hidden;
  border-radius: 10px;
  box-shadow: 0 0 20px 0 darkgrey;
}

form {
  position: absolute;
  margin-top: 70px;
  transition: .5s;
  width: 300px;
  height: 400px;
}

.buttonsForm {
  margin-top: 25px;
  position: relative;
  border-radius: 60px;
  box-shadow: 0 0 7px 0 #0C4DBF;
}

.buttonsForm button {
  cursor: pointer;
  background: transparent;
  border: none;
  position: relative;
  padding: 10px 29px;
}

.btnColor {
  position: absolute;
  width: 108px;
  height: 100%;
  background: linear-gradient(to right, #0C4DBF, white);
  border-radius: 20px;
  transition: .3s;
}

input[type="text"], input[type="password"] {
  border: none;
  margin-top: 25px;
  border-radius: 60px;
  padding: 8px 0 8px 35px;
  outline: none;
  width: 100%;
}

button[type="submit"] {
  background: #052AA6;
  color: white;
  border-radius: 30px;
  width: 100%;
  border: none;
  outline: none;
  padding: 8px 0 8px 15px;
  font-size: 15px;
  margin-top:10px;
  cursor: pointer;
}

.divCheck {
  margin: 10px 0 0 5px;
  width: 80%;
  font-size: 13px;
}


#signin {
  left: 25px;
}

i {
  position: absolute;
  left: 0;
  padding: 10px 10px;
}

.iEmail {
  top: 40px;
}

.iPassword {
  top: 114px;
}

.iPassword2 {
  top: 190px;
}

.botaosubmit{ 
  background-color: #052AA6; 
  color: white; 
  padding: 5px; 
  border-radius: 5px;
  margin-left:-1px;
}
</style>

<body>
    <header>
        <a href="index.html">
            <img src="../img/LogotipoFuttura.png" alt="Logo da sua empresa" style="padding-top: 10px; max-width: 30%; margin-left: 15%;">
        </a>
    </header>
    
    <div class="container">
        <div class="buttonsForm">
        <div class="btnColor"></div>
        <button id="btnSignup">Acesse sua conta</button>
        </div>

        <form action='login.php' id="signin" method="POST">
        <br>    
        <h3>Insira seus dados e acesse sua conta!</h3>
            
        <br>
            <input type="text" name="cpf" placeholder="CPF no formato: xxx.xxx.xxx-xx" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" autocomplete="off" class="cpfcadastro">
            <script src="../js/formatacpf.js"></script>

            <input type="password" name='senha' placeholder="Senha" required /> <br>
        <br>

        <button class="botaosubmit" name="submit" type="submit">Acessar minha conta</button>
        
        <a style="margin: 10px;" href="signup-inicio1.php">
          <h6>Não tem conta ainda?</h6>
        </a>

        </form>
    </div>

  <script>
    var formSignin = document.querySelector('#signin');
    var formSignup = document.querySelector('#signup');
    var btnColor = document.querySelector('.btnColor');

    document.querySelector('#btnSignin')
      .addEventListener('click', () => {
        formSignin.style.left = "25px";
        formSignup.style.left = "450px";
        btnColor.style.left = "0px";
    });

    document.querySelector('#btnSignup')
      .addEventListener('click', () => {
        formSignin.style.left = "-450px";
        formSignup.style.left = "25px";
        btnColor.style.left = "110px";
    });
  </script>
</body>
</html>
