<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title><?php echo $titulo_pagina; ?></title>
		<meta charset="utf-8">
		<style type="text/css">@import "<?php echo URL_BASE; ?>css/style.css";</style>
        <script type="text/javascript" src="functions/goback.js"></script>
	</head>
	<body>
		<div class="container">
			<h1><?php echo $titulo_pagina; ?></h1>
			<table>
				<thead>
					<tr>
						<th>Código</th><th>Nome</th><th>e-mail</th><th>login</th><th>Ações</th>
					</tr>
				</thead>
				<tbody>
					<?php
						foreach($registros as $registro)
						{
							echo "
								<tr>
									<td>" . $registro['id'] . "</td>
									<td>{$registro['nome']}</td>
									<td>{$registro['email']}</td>
									<td>{$registro['login']}</td>
									<td class='acoes'>
										<a href='../admin/usuarios.php?acao=alterar&id={$registro['id']}'>A</a>&nbsp;&nbsp;
										<a href='javascript:if(confirm(\"Confirma a exclusão?\")){document.location=\"usuarios.php?acao=excluir&id={$registro['id']}\";}'>E</a>
									</td>
								</tr>
							";
						}
					?>
				</tbody>
			</table>
			<div class="form-group"><button type="button" onclick="document.location='usuarios.php?acao=incluir';">Novo</button><button type="button" onclick="goBack()">Voltar</button></div>
		</div><!-- container -->
	</body>
</html>