<?php require_once( "myDBC.php"); if(isset($_SESSION[ 'session'])) { ?>
<!DOCTYPE html>

<html lang="en">

<head>
    <title>Pagina principal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
</head>

<body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="principal.php">Stratton Software</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Usuarios <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="usuarios.php">Control de usuarios</a>
                            </li>
                            <li><a href="#">Page 1-2</a>
                            </li>
                            <li><a href="#">Page 1-3</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Pagina2 <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Page 2-1</a>
                            </li>
                            <li><a href="#">Page 2-2</a>
                            </li>
                            <li><a href="#">Page 2-3</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Pagina3 <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Page 3-1</a>
                            </li>
                            <li><a href="#">Page 3-2</a>
                            </li>
                            <li><a href="#">Page 3-3</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">

                    <li><a href="salir.php"><span class="glyphicon glyphicon-log-out"></span> Cerrar Sesion</a>

                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?php }else 
    echo '<script type="text/javascript">
      alert("Registrarse para ver este contenido");
      window.location="registro.html"
</script>'; ?>