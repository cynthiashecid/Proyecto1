<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>campusMVP.es - Barra de navegación con Bootstrap</title>
    
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
  <body>
   <div class="container-fluid">
    <!-- BARRA NAVEGACIÓN -->
    <div class="bg-light">
		<nav class="navbar navbar-expand-md navbar-light bg-light border-3 border-bottom border-primary">
            <div class="container-fluid">
                <a href="#" class="navbar-brand">CampusMVP.es</a>
                <button type="button"
                    class="navbar-toggler"
                    data-bs-toggle="collapse"
                    data-bs-target="#MenuNavegacion">
                        <span class="navbar-toggler-icon"></span>
                </button>
            </div>

			<div id="MenuNavegacion" class="collapse navbar-collapse">
				<ul class="navbar-nav ms-3">
					<li class="nav-item">
                        <a class="nav-link active" href="#">Introducción</a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link" href="#">Catálogo</a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link" href="#">Ayuda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                          Opciones de soporte
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Manuales</a></li>
                          <li><a class="dropdown-item" href="#">Base de conocimientos</a></li>
                          <li><a class="dropdown-item" href="#">Contacta con nosotros</a></li>
                        </ul>
                    </li>
				</ul>
                <ul class="navbar-nav ms-3">
					<li class="nav-item">
                        <a class="nav-link text-nowrap" href="#">Iniciar sesión</a>
                    </li>
                </ul>
			</div>
		</nav>
	</div>

  <div class="row justify-content-center mt-4">
    <div class="col-10 col-md-6 col-lg-4 text-center">
      <a class="text-decoration-none" target="_blank" href="https://www.campusmvp.es/catalogo/Product-Interfaces-web-responsive-con-HTML5,-Flexbox,-CSS-Grid-y-Bootstrap_212.aspx">👉🏻 Aprende a fondo a crear interfaces Web responsive con HTML5, CSS Grid, Flexbox y Bootstrap</a>
    </div>
  </div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>
</html>