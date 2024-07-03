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
	<script src="config.js" defer></script>

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
				</div>
			</form>
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
					<input style="width: 50%; 
								margin: 5px; 
								padding: 5px; 
								border-radius: 50px; 
								height: 30px;" 
					type="text" id="nome_completo" name="nome_completo" required><br>
					
					<label for="cpf">CPF:</label>
					<input style="width: 50%; 
								margin: 5px; 
								padding: 5px; 
								border-radius: 50px; 
								height: 30px;" 
					type="text" id="cpf" name="cpf" readonly value="123.456.789-00"><br>

					<label for="celular">Celular pessoal:</label>
					<input style="width: 50%; 
								margin: 5px; 
								padding: 5px; 
								border-radius: 50px; 
								height: 30px;" 
					type="telephone" id="celular" name="celular" required><br>
			
				<h3>Endereço</h3>			
					<form id="address-form">
						<div class="row mb-3">					
							<div class="form-floating">
							<span>Digite seu CEP - SOMENTE NÚMEROS: </span>	
								<input								
								type="text"
								class="form-control shadow-none"
								id="cep"
								name="cep"
								placeholder="SOMENTE NÚMEROS"
								maxlength="8"
								minlength="8"
								required
								style="width: 15%; 
								margin: 5px; 
								padding: 5px; 							
								border-radius: 50px; 
								height: 30px;"
					/>
					<button type="button" id="buscarCep" style="margin: 15px; 
														padding: 5px;														
														border-radius: 30px; 
														height: 30px;
														background-color: green;
														color: white;">
														Procurar CEP
													</button>
							</div>
						</div>
						<div class="row mb-3">
							<div class="col-12 col-sm-6 mb-3 mb-md-0 form-floating">
							<span>Rua: </span>	
								<input
								type="text"
								class="form-control shadow-none"
								id="address"
								name="address"
								placeholder="Rua"
								disabled
								required
								data-input
								style="width: 50%; 
								margin: 5px; 
								padding: 5px; 
								border-radius: 50px; 
								height: 30px;" 
					/>
							</div>
							<div class="col-12 col-sm-6 form-floating">
							<span>Digite o número da residência: </span>	
								<input
								type="text"
								class="form-control shadow-none"
								id="number"
								name="number"
								placeholder="Digite o número da residência"
								disabled
								required
								data-input
								style="width: 50%; 
								margin: 5px; 
								padding: 5px; 
								border-radius: 50px; 
								height: 30px;" 
					/>
							</div>
						</div>
						<div class="row mb-3">
							<div class="col-12 col-sm-6 mb-3 mb-md-0 form-floating">
							<span>Digite um complemento: </span>	
								<input
								type="text"
								class="form-control shadow-none"
								id="complement"
								name="complement"
								placeholder="Digite o complemento"
								disabled
								data-input
								style="width: 50%; 
								margin: 5px; 
								padding: 5px; 
								border-radius: 50px; 
								height: 30px;" 
					/>
							</div>
							<div class="col-12 col-sm-6 form-floating">
							<span>Bairro: </span>	
								<input
								type="text"
								class="form-control shadow-none"
								id="neighborhood"
								name="neighborhood"
								placeholder="Bairro"
								disabled
								required
								data-input
								style="width: 50%; 
								margin: 5px;
								padding: 5px;  
								border-radius: 50px; 
								height: 30px;" 
					/>
							</div>
						</div>
						<div class="row mb-3">
							<div class="col-12 col-sm-6 mb-3 mb-md-0 form-floating">
							<span>Cidade: </span>	
								<input
								type="text"
								class="form-control shadow-none"
								id="city"
								name="city"
								placeholder="Cidade"
								disabled
								required
								data-input
								style="width: 50%; 
								margin: 5px; 
								padding: 5px; 
								border-radius: 50px; 
								height: 30px;" 
					/>
							</div>
							<div class="col-12 col-sm-6 mb-3">
							<span>Estado: </span>	
								<select
								class="form-select shadow-none"
								id="region"
								disabled
								required
								data-input
								style="width: 50%; 
								margin: 5px;
								padding: 5px; 
								border-radius: 50px; 
								height: 30px;" 
					>
								<option selected>Estado</option>
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
							</div>
						</div>
					</form>

					<h3>Documentações</h3>
					<label for="tipo_documento">Tipo de documento:</label>
					<input style="width: 50%; 
								margin: 5px; 
								padding: 5px; 
								border-radius: 50px; 
								height: 30px;" 
					type="text" id="tipo_documento" name="tipo_documento" required><br>

					<label for="orgao_emissor">Orgão emissor:</label>
					<input style="width: 50%; 
								margin: 5px; 
								padding: 5px; 
								border-radius: 50px; 
								height: 30px;" 
					type="text" id="orgao_emissor" name="orgao_emissor" required><br>

					<label for="numero_documento">Número do documento:</label>
					<input style="width: 50%; 
								margin: 5px; 
								padding: 5px; 
								border-radius: 50px; 
								height: 30px;" 
					type="text" id="numero_documento" name="numero_documento" required><br>

					<label for="data_emissao">Data de emissão:</label>
					<input style="width: 50%; 
								margin: 5px; 
								padding: 5px; 
								border-radius: 50px; 
								height: 30px;" 
					type="date" id="data_emissao" name="data_emissao" required><br>

					<label for="estado_emitente">Estado emitente:</label>
					<select style="width: 50%; 
								margin: 5px; 
								padding: 5px; 
								border-radius: 50px; 
								height: 30px;" 
					id="estado_emitente" name="estado_emitente" required>
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
					<input style="width: 50%; 
								margin: 5px; 
								padding: 5px; 
								border-radius: 50px; 
								height: 30px;" 
					type="text" id="sexo" name="sexo" required><br>

					<label for="nacionalidade">Nacionalidade:</label>
					<input style="width: 50%; 
								margin: 5px; 
								padding: 5px; 
								border-radius: 50px; 
								height: 30px;" 
					type="text" id="nacionalidade" name="nacionalidade" required><br>

					<label for="estado_nascimento">Estado que nasceu:</label>
					<select style="width: 50%; 
								margin: 5px; 
								padding: 5px; 
								border-radius: 50px; 
								height: 30px;" 
					id="estado_nascimento" name="estado_nascimento" required>
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
					<br>
					<label for="naturalidade">Naturalidade:</label>
					<input style="width: 20%; 
								margin: 5px; 
								padding: 5px; 
								border-radius: 10px; 
								height: 30px;"
					type="text" id="naturalidade" name="naturalidade" required><br>

					<label for="nome_mae">Nome da mãe:</label>
					<input style="width: 50%; 
								margin: 5px; 
								padding: 5px; 
								border-radius: 10px; 
								height: 30px;"
					type="text" id="nome_mae" name="nome_mae" required><br>

					<label for="nome_pai">Nome do pai:</label>
					<input style="width: 50%; 
								margin: 5px; 
								padding: 5px; 
								border-radius: 10px; 
								height: 30px;"
					type="text" id="nome_pai" name="nome_pai"><br>

					<label for="estado_civil">Estado civil:</label>
					<input style="width: 10%; 
								margin: 5px; 
								padding: 5px; 
								border-radius: 10px; 
								height: 30px;"
					type="text" id="estado_civil" name="estado_civil" required><br>

				<h3>Ocupação profissional</h3>
					<label for="ocupacao">Ocupação profissional:</label>
					<input style="width: 10%; 
								margin: 5px; 
								padding: 5px; 
								border-radius: 10px; 
								height: 30px;"type="text" id="ocupacao" name="ocupacao" required><br>
				
				<h3>Rendimentos mensais</h3>
					<label for="rendimentos_mensais">Rendimentos mensais:</label>
					<input style="width: 10%; 
								margin: 5px; 
								padding: 5px; 
								border-radius: 10px; 
								height: 30px;"
					type="text" id="rendimentos_mensais" placeholder="R$" name="rendimentos_mensais" required><br>

					<label for="bens_imoveis">Total em Bens Imóveis:</label>
					<input style="width: 10%; 
								margin: 5px; 
								padding: 5px; 
								border-radius: 10px; 
								height: 30px;"
					type="text" id="bens_imoveis" placeholder="R$" name="bens_imoveis"><br>

					<label for="bens_moveis">Total de Bens Móveis:</label>
					<input style="width: 10%; 
								margin: 5px; 
								padding: 5px; 
								border-radius: 10px; 
								height: 30px;"
					type="text" id="bens_moveis" placeholder="R$ " name="bens_moveis"><br>

					<label for="outros_bens">Total de Outros Bens:</label>
					<input style="width: 15%; 
								margin: 5px; 
								padding: 5px; 
								border-radius: 10px; 
								height: 30px;"
					type="text" id="outros_bens" placeholder="R$ "  name="outros_bens"><br>

					<label for="vinculo_futtura">Pessoa vinculada a Futtura Invest?</label> 
					<select style="width: 15%; 
								margin: 5px; 
								border-radius: 10px; 
								height: 30px;"
					id="vinculo_futtura" name="vincula_futtura" required> 
						<option selected disabled>Selecione a opção</option>
						<option value="Sim">Sim</option>
						<option value="Não">Não</option>
						<option value="Talvez">Já fui, atualmente não tenho mais vinculo.</option>
					</select>
					<br>

					<label for="politicamente_exposta">Sou pessoa politicamente exposta?</label> 
					<select style="width: 15%; 
								margin: 5px; 
								border-radius: 10px; 
								height: 30px;"
					id="politicamente_exposta" name="politicamente_exposta" required>
						<option selected disabled>Selecione a opção</option> 
						<option value="Sim">Sim</option>
						<option value="Nao">Não</option>
					</select>
					<br>
					<label for="cidadania_americana">Cidadania americana?</label>
					<select style="width: 15%; 
								margin: 5px; 
								border-radius: 10px; 
								height: 30px;"
					id="cidadania_americana" name="cidadania_americana" required> 
						<option selected disabled>Selecione a opção</option>
						<option value="Sim">Sim</option>
						<option value="Nao">Não</option>
					</select>

				<h3>Financeiro</h3>
					<label for="tipo_conta">Tipo da conta bancária:</label>
					<select style="width: 15%; 
								margin: 5px; 
								border-radius: 10px; 
								height: 30px;"
					id="tipo_conta" name="tipo_conta" required> 
						<option selected disabled>Selecione a opção</option>
						<option value="Conta Corrente">Conta Corrente</option>
						<option value="Conta Poupança">Conta Poupança</option>
					</select>
					<br>
					<label for="banco">Banco:</label>
					<input style="width: 10%; 
								margin: 5px; 
								padding: 5px; 
								border-radius: 10px; 
								height: 30px;"
					type="text" id="banco" name="banco" required><br>

					<label for="agencia">Agência:</label>
					<input style="width: 15%; 
								margin: 5px; 
								padding: 5px; 
								border-radius: 10px; 
								height: 30px;"
					type="text" id="agencia" name="agencia" required><br>

					<label for="conta">Conta:</label>
					<input style="width: 15%; 
								margin: 5px; 
								padding: 5px; 
								border-radius: 10px; 
								height: 30px;"
					type="text" id="conta" name="conta" required><br>
				
				<br>
			
				<a href="#">
					<span type="submit" class="botao-atualizar">Atualizar informações</span>
				</a>
			
			</form>
		</main>
</body>
</html>