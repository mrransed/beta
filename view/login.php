<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>LOGIN CLIENTES</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<header class="header">
		<div class="container-centerA">
			<div class="empty"></div>
			<div class="sectionHeaderA">
				<div class="img">
					<img src="assets/logo.png" alt="logo de sistema presty">
				</div>
<div class="tle">
<h2>
<span>PRESTY</span>
<span>versión 1beta</span>

</h2>
				</div>
			</div>
			<div class="empty"></div>
		</div>
		<div class="container-centerC">
			<div class="empty"></div>
			<div class="sectionHeaderB">
				<h3>inicio de sesión</h3>
			</div>
			<div class="empty"></div>
		</div>
	</header>
<section class="form container-centerA">
	<div class="empty"></div>
		<div class="container-form">
			<form action="procesar-login.php" method="post">
			<input type="text" name="usuario" placeholder="USUARIO">
			<input type="password" name="clave" placeholder="CONTRASEÑA">
			<input type="submit" text="ENTRAR">
		</form>
		</div>
	<div class="empty"></div>
</section>

</body>
</html>