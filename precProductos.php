<?php require_once( "myDBC.php"); 
 
$servername = "localhost";
$username = "admin";
$password = "andres123";
$dbname = "productos";


$conn = new mysqli($servername, $username, $password, $dbname);    
$sql = "SELECT * FROM mercancia";
$result = $conn->query($sql); 
?>


<!DOCTYPE html>

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./css/footerStyle.css">
<link rel="stylesheet" href="./css/tablaStyle.css">
<script src="./js/tabla.js"></script>


<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header ">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="precProductos.php">Papeleria Multiservicios Escolares</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">  <span class="glyphicon glyphicon-arrow-left"></span> Regresar</a>
                </li>
       
                 
               

            </ul>
            <ul class="nav navbar-nav navbar-right">
               <li><a href="registro.html"><span class="glyphicon glyphicon-barcode"></span> Agregar producto</a>
                 
                    </li>
                
            </ul>
        </div>
    </div>
</nav>
<div class="container">


    <div class="row">
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
                <h3 class="panel-title">Inventario de mercancia</h3>
                <div class="pull-right">
                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filtrar</button>
                </div>
            </div>
             <form action='borraUsuarios.php' method='post'>
            <table class="table table-hover">
                <thead>
                    <tr class="filters">
                       
                        <th>
                            <input type="text" class="form-control" placeholder="Mercancia" disabled>
                        </th>
                        <th>
                            <input type="text" class="form-control" placeholder="Precio" disabled>
                        </th>
                    
                        
                    <!--<th><button type="submit" class="btn btn-danger btn-cons">Borrar</button> 
                       </th>-->
                        
                                        
                       
                    </tr>
                </thead>
                                                               
                <tbody>
                    <?php  while($row = $result->fetch_assoc()) { ?>
                    <tr>

                     
                        <td><?php echo $row['merca'];?> </td>
                        <td><?php echo $row['precio'];?></td>
                        
          
                        <td>
                       
                         <!--   	<label class="btn btn-danger active">
				<input type="checkbox" autocomplete="off"  name="casilla[]" value="<?php //$row['idUsuario']; ?>" >
				<span class="glyphicon glyphicon-remove"></span>
			</label>-->
      
           
                        </td>
              
                        
                    </tr>
                     <?php } ?>
                   
                </tbody>
            </table>
                 </form>
        </div>
    </div>
</div>
