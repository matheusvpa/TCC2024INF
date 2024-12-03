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
			<li class="active">
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
			<li>
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
					<h1>Olá! Seja bem-vindo.</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Sua conta</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Visão geral</a>
						</li>
					</ul>
				</div>
			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<h3>3</h3>
						<p>Investimentos</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3>2834</h3>
						<p>Visitors</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
						<h3>R$ 2543</h3>
						<p>Total investido</p>
					</span>
				</li>
			</ul>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Atualizações recentes</h3>
					</div>
					<table>
						<thead>
							<tr>
								<th>Responsável</th>
								<th>Data de atualização</th>
								<th>Status</th>
							</tr>
						</thead>
						<!-- aqui inicia os usuários-->
						<tbody>
							<tr>
								<td>
									<img src="#">
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status completed">Completed</span></td>
							</tr>
							<tr>
								<td>
									<img src="#">
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status pending">Pending</span></td>
							</tr>
							<tr>
								<td>
									<img src="#">
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status process">Process</span></td>
							</tr>
							<tr>
								<td>
									<img src="#">
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status pending">Pending</span></td>
							</tr>
							<tr>
								<td>
									<img src="#">
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status completed">Completed</span></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="todo">
					<div class="head">
						<h3>Veja isso...</h3>
					</div>
					<ul class="todo-list">
						<li class="completed">
							<p>Notícia 1</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="completed">
							<p>Notícia 1</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="completed">
							<p>Notícia 1</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="completed">
							<p>Notícia 1</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="completed">
							<p>Notícia 1</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
					</ul>
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
</body>
</html>