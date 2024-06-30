<?php
    session_start();
    //print_r($_SESSION);

    if((!isset($_SESSION['cpf']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['cpf']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['cpf'];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="styledash.css">

	<title>Futtura Invest - Seja bem-vindo aos seus investimentos.</title>
</head>
<body>
	<section id="sidebar">
		<a href="indexdashboard.php" class="brand">
			<img id="theme-image" src="../img/LogoFundoTransparente.png" alt="Logo">
		</a>

		<ul class="side-menu top">
			<li>
				<a href="indexdashboard.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Visão geral</span>
				</a>
			</li>
			<li>
				<a href="meusinvestimentos.html">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Meus investimentos</span>
				</a>
			</li>
			<li>
				<a href="../empreendimentos.html" target="_blank">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">De olho no mercado...</span>
				</a>
			</li>
			<li>
				<a href="https://telegram.org" target="_blank">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Chat de investidores</span>
				</a>
			</li>
			<li>
				<a href="https://wa.me/+5567996997580" target="_blank">
					<i class='bx bxs-group' ></i>
					<span class="text">Fale conosco</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li class="active">
				<a href="config.php">
					<i class='bx bxs-cog' ></i>
					<span class="text">Configurações</span>
				</a>
			</li>
			<li>
				<a href="signout.php" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Sair da conta</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Menu</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Pesquisar...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
			</a>
			<a href="#" class="profile">
				<img src="../img/brunodill.png">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Atualize os seus dados</h1>
				</div>
			</div>

		<form action="atualizar_dados.php" method="POST">
				<h3>Informações pessoais</h3>
					<label for="nome_completo">Nome completo:</label>
					<input type="text" id="nome_completo" name="nome_completo" required><br>
					
					<label for="cpf">CPF:</label>
					<input type="text" id="cpf" name="cpf" readonly value="123.456.789-00"><br>

					<label for="celular">Celular pessoal:</label>
					<input type="telephone" id="celular" name="celular" required><br>

				
				<h3>Endereço</h3>
					<label for="endereco">Endereço:</label>
					<input type="text" id="endereco" name="endereco" required><br>

					<label for="rua">Rua:</label>
					<input type="text" id="rua" name="rua" required><br>

					<label for="cep">CEP:</label>
					<input type="text" id="cep" name="cep" required><br>

					<label for="bairro">Bairro:</label>
					<input type="text" id="bairro" name="bairro" required><br>

					<label for="numero">Número:</label>
					<input type="text" id="numero" name="numero" required><br>

					<label for="complemento">Complemento:</label>
					<input type="text" id="complemento" name="complemento"><br>
				<h3>Endereço</h3>
					<label for="tipo_documento">Tipo de documento:</label>
					<input type="text" id="tipo_documento" name="tipo_documento" required><br>

					<label for="orgao_emissor">Orgão emissor:</label>
					<input type="text" id="orgao_emissor" name="orgao_emissor" required><br>

					<label for="numero_documento">Número do documento:</label>
					<input type="text" id="numero_documento" name="numero_documento" required><br>

					<label for="data_emissao">Data de emissão:</label>
					<input type="date" id="data_emissao" name="data_emissao" required><br>

					<label for="estado_emitente">Estado emitente:</label>
					<select id="estado_emitente" name="estado_emitente" required>
						<option selected disabled>Selecione o estado</option>
						<option value="AC">Acre</option>
						<option value="AL">Alagoas</option>
						<option value="AP">Amapá</option>
						<option value="AM">Amazonas</option>
						<option value="BA">Bahia</option>
						<option value="CE">Ceará</option>
						<option value="DF">Distrito Federal</option>
						<option value="ES">Espírito Santo</option>
						<option value="GO">Goiás</option>
						<option value="MA">Maranhão</option>
						<option value="MT">Mato Grosso</option>
						<option value="MS">Mato Grosso do Sul</option>
						<option value="MG">Minas Gerais</option>
						<option value="PA">Pará</option>
						<option value="PB">Paraíba</option>
						<option value="PR">Paraná</option>
						<option value="PE">Pernambuco</option>
						<option value="PI">Piauí</option>
						<option value="RJ">Rio de Janeiro</option>
						<option value="RN">Rio Grande do Norte</option>
						<option value="RS">Rio Grande do Sul</option>
						<option value="RO">Rondônia</option>
						<option value="RR">Roraima</option>
						<option value="SC">Santa Catarina</option>
						<option value="SP">São Paulo</option>
						<option value="SE">Sergipe</option>
						<option value="TO">Tocantins</option>
					</select>

					
				<h3>Documentações</h3>
					<label for="sexo">Sexo:</label>
					<input type="text" id="sexo" name="sexo" required><br>

					<label for="nacionalidade">Nacionalidade:</label>
					<input type="text" id="nacionalidade" name="nacionalidade" required><br>

					<label for="estado_nascimento">Estado que nasceu:</label>
					<input type="text" id="estado_nascimento" name="estado_nascimento" required><br>

					<label for="naturalidade">Naturalidade:</label>
					<input type="text" id="naturalidade" name="naturalidade" required><br>

					<label for="nome_mae">Nome da mãe:</label>
					<input type="text" id="nome_mae" name="nome_mae" required><br>

					<label for="nome_pai">Nome do pai:</label>
					<input type="text" id="nome_pai" name="nome_pai"><br>

					<label for="estado_civil">Estado civil:</label>
					<input type="text" id="estado_civil" name="estado_civil" required><br>

				<h3>Ocupação profissional</h3>
					<label for="ocupacao">Ocupação profissional:</label>
					<input type="text" id="ocupacao" name="ocupacao" required><br>
				
				<h3>Rendimentos mensais</h3>
					<label for="rendimentos_mensais">Rendimentos mensais:</label>
					<input type="text" id="rendimentos_mensais" name="rendimentos_mensais" required><br>

					<label for="bens_imoveis">Total em Bens Imóveis:</label>
					<input type="text" id="bens_imoveis" name="bens_imoveis"><br>

					<label for="bens_moveis">Total de Bens Móveis:</label>
					<input type="text" id="bens_moveis" name="bens_moveis"><br>

					<label for="outros_bens">Total de Outros Bens:</label>
					<input type="text" id="outros_bens" name="outros_bens"><br>

					<label for="vinculo_futtura">Pessoa vinculada a Futtura Invest?</label>
					<input type="text" id="vinculo_futtura" name="vinculo_futtura"><br>

					<label for="politicamente_exposta">Sou pessoa politicamente exposta?</label>
					<input type="text" id="politicamente_exposta" name="politicamente_exposta"><br>

					<label for="cidadania_americana">Cidadania americana?</label>
					<input type="text" id="cidadania_americana" name="cidadania_americana"><br>

				<h3>Financeiro</h3>
					<label for="tipo_conta">Tipo da conta bancária:</label>
					<input type="text" id="tipo_conta" name="tipo_conta" required><br>

					<label for="banco">Banco:</label>
					<input type="text" id="banco" name="banco" required><br>

					<label for="agencia">Agência:</label>
					<input type="text" id="agencia" name="agencia" required><br>

					<label for="conta">Conta:</label>
					<input type="text" id="conta" name="conta" required><br>
				
				<br>
			
				<a href="#">
					<span type="submit" class="botao-atualizar">Atualizar informações</span>
				</a>
		</form>

	<script src="script.js"></script>
</body>
</html>