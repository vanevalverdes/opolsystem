<?php
    session_start();
if (!isset($_SESSION["start"])) {
    header('location: login.html');
}

?>
<!doctype html>
<html lang="en">
	<head>
		<title>Nuevo Reporte</title>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	</head>
<style>
body {
  overflow: hidden; /* Hide scrollbars */
}
</style>
	<body>
		<div class='container-fluid'>
<?php
if ($_SESSION["type"] == 2) {
echo "<nav class='navbar navbar-expand-lg navbar-light bg-light'>
  <a class='navbar-brand' href='system.php'>
    <img src='/images/opol.png'style='max-height:50px;' class='d-inline-block align-top' alt=''>
  </a>
  <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
    <span class='navbar-toggler-icon'></span>
  </button>

  <div class='collapse navbar-collapse' id='navbarSupportedContent'>
    <ul class='navbar-nav mr-auto'>
      <li class='nav-item'>
        <a class='nav-link' href='/'><span class='glyphicon glyphicon-user'></span> Reporte</a>
      </li>
      <li class='nav-item'>
        <a class='nav-link' href='logout.php'><span class='glyphicon glyphicon-user'></span> Salir</a>
      </li>
    </ul>
  </div>
</nav>
";	
 include "reporte-nacional-provincias.php";
echo "Actualizado en: "; echo date('d-m-Y H:i:s');
}
elseif ($_SESSION["type"] == 3) {
    header("Refresh:300");
echo "<nav class='navbar navbar-expand-lg navbar-light bg-light'>
  <a class='navbar-brand' href='system.php'>
    <img src='/images/opol.png'style='max-height:50px;' class='d-inline-block align-top' alt=''>
  </a>
  <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
    <span class='navbar-toggler-icon'></span>
  </button>

  <div class='collapse navbar-collapse' id='navbarSupportedContent'>
    <ul class='navbar-nav mr-auto'>
      <li class='nav-item'>
        <a class='nav-link' href='/'><span class='glyphicon glyphicon-user'></span> Reporte</a>
      </li>
      <li class='nav-item'>
        <a class='nav-link' href='logout.php'><span class='glyphicon glyphicon-user'></span> Salir</a>
      </li>
    </ul>
  </div>
</nav>
";	
 include "reporte-ivan.php";
echo "Actualizado en: "; echo date('d-m-Y H:i:s');
} else {
echo "<nav class='navbar navbar-expand-lg navbar-light bg-light'>
  <a class='navbar-brand' href='system.php'>
    <img src='/images/opol.png'style='max-height:50px;' class='d-inline-block align-top' alt=''>
  </a>
  <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
    <span class='navbar-toggler-icon'></span>
  </button>

  <div class='collapse navbar-collapse' id='navbarSupportedContent'>
    <ul class='navbar-nav mr-auto'>
      <li class='nav-item'>
        <a class='nav-link' href='logout.php'><span class='glyphicon glyphicon-user'></span> Salir</a>
      </li>
    </ul>
  </div>
</nav>";
    if ($_SESSION["form"] == 1) {
        echo "<iframe src='". $_SESSION["form1"] ."' frameborder='0' marginheight='0' marginwidth='0' style='width:100vw;height:85vh;overflow-y: hidden;  overflow-x: hidden; '>Cargando…</iframe>";
    }
    elseif ($_SESSION["form"] == 2) {
        echo "<iframe src='". $_SESSION["form2"] ."' frameborder='0' marginheight='0' marginwidth='0' style='width:100vw;height:85vh;overflow-y: hidden;  overflow-x: hidden; '>Cargando…</iframe>";
    }
    elseif ($_SESSION["form"] == 3) {
        echo "<iframe src='". $_SESSION["form3"] ."' frameborder='0' marginheight='0' marginwidth='0' style='width:100vw;height:85vh;overflow-y: hidden;  overflow-x: hidden; '>Cargando…</iframe>";
    }
    elseif ($_SESSION["form"] == 4) {
        echo "<iframe src='". $_SESSION["form4"] ."' frameborder='0' marginheight='0' marginwidth='0' style='width:100vw;height:85vh;overflow-y: hidden;  overflow-x: hidden; '>Cargando…</iframe>";
    }
    elseif ($_SESSION["form"] == 5) {
        echo "<iframe src='". $_SESSION["form5"] ."' frameborder='0' marginheight='0' marginwidth='0' style='width:100vw;height:85vh;overflow-y: hidden;  overflow-x: hidden; '>Cargando…</iframe>";
    };


}
?>
		</div>
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

	</body>
</html>

