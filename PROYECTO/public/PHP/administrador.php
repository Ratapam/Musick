<?php

function presentacion() {
	echo '
	<div>
	<p>
	Bienvenido administrador.
	</br>¿Qué quieres hacer?
	</p>
	<form action="administrador.php" method="get">
	<input type="submit" value="Borrar Usuario" name="borrarUsuario"></input>
	<input type="submit" value="Subir Cancion" name="subirCancion"></input>
	<input type="submit" value="Crear Disco" name="crearDisco"></input>
	<input type="submit" value="Dar de alta autor" name="altaAutor"></input>
	</form>
	</div>';
}

function pantallaBorrarUsuario() {
	echo '
	<div>
	<p>
	Borrar usuarios:
	</br>
	</p>
	<form action="administrador.php" method="post">
	<input type="text" name="id_usuario" value="id_usuario"></input>
	</br>
	<input type="text" name="nick" value="nick"></input>
	</br>
	<input type="submit" value="Borrar Usuario" name="subir"></input>
	</form>
	</div>';
}

function pantallaSubirCancion() {
	// HACER UN SELECT CON LOS DISCOS / AUTORES / ESTILOS DISPONIBLES
	echo '
	<div>
	<p>
	Subir canción:
	</br>
	</p>
	<form action="administrador.php" method="post">
	<input type="text" name="id_cancion" value="id_cancion"></input>
	</br>
	<input type="text" name="nombre" value="nombre"></input>
	</br>
	<input type="text" name="id_disco" value="id_disco"></input>
	</br>
	<input type="text" name="id_autor" value="id_autor"></input>
	</br>
	<input type="text" name="id_estilo" value="id_estilo"></input>
	</br>
	<input type="submit" value="Subir Canción" name="subir"></input>
	</form>
	</div>
	';
}

function pantallaCrearDisco() {
	echo '
	<div>
	<p>
	Crear disco:
	</br>
	</p>
	<form action="administrador.php" method="post">
	<input type="text" name="id_disco" value="id_disco"></input>
	</br>
	<input type="text" name="nombre" value="nombre"></input>
	</br>
	<input type="submit" value="Subir Disco" name="subir"></input>
	</form>
	</div>
	';
}

function pantallaAltaAutor() {
	echo '
	<div>
	<p>
	Alta autor:
	</br>
	</p>
	<form action="administrador.php" method="post">
	<input type="text" name="id_autor" value="id_autor"></input>
	</br>
	<input type="text" name="nombre" value="nombre"></input>
	</br>
	<input type="submit" value="Alta Autor" name="subir"></input>
	</form>
	</div>';
}


function procesarPantalla() {
	// Puede que haya que cambiar este if
	if (empty($_GET)) {
		presentacion();
	} else {
		if (isset($_GET["borrarUsuario"])) {
			pantallaBorrarUsuario();
		} elseif(isset($_GET["subirCancion"])) {
			pantallaSubirCancion();
		} elseif(isset($_GET["crearDisco"])) {
			pantallaCrearDisco();
		} elseif(isset($_GET["altaAutor"])) {
			pantallaAltaAutor();
		}
	}

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../css/administrador.css">
	<title>Administrador</title>
</head>
<body>
	<div class="container">
		<header class="row">
			<div class="col-12">
				<img src="../img/logo.png">
				<a href="login.html">
					<input type="button" value="Cerrar sesion"/>
				</a>
			</div>
		</header>

	</header>
	<main>

		<?php
		procesarPantalla();
		?>


	</main>
	<footer class="py-5 bg-dark">

			<p class="m-0 text-center text-white">Copyright &copy; Musick 2019</p>
	</footer>
</div>

</body>
</html>
