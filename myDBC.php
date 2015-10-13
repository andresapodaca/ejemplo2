<meta charset="utf-8">
<?php
ini_set('display_errors', 0);
session_start();
// My database Class called myDBC
class myDBC {
    // our mysqli object instance
    public $mysqli = null;
 
    // Class constructor override
    public function __construct() {
 
        include_once "dbconfig.php";
        $this->mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
 
        if ($this->mysqli->connect_errno) {
            echo "Error MySQLi: ("&nbsp. $this->mysqli->connect_errno.") " . $this->mysqli->connect_error;
            exit();
        }
        $this->mysqli->set_charset("utf8");
    }
 
    // Class deconstructor override
    public function __destruct() {
        $this->CloseDB();
    }
 
    // runs a sql query
    public function runQuery($qry) {
        $result = $this->mysqli->query($qry);
        return $result;
    }
 
    // Close database connection
    public function CloseDB() {
        $this->mysqli->close();
    }
 
    // Escape the string get ready to insert or update
    public function clearText($text) {
        $text = trim($text);
        return $this->mysqli->real_escape_string($text);
    }
 
    public function logueo($usuario, $contrasenia){
        //El password obtenido se le aplica el crypt
        //Posteriormente se compara en el query
        $pass_c = crypt($contrasenia, '_er#.lop');
        $q = "select * from usuarios where nomUsuario='$usuario' and pass='$pass_c'";
 
        $result = $this->mysqli->query($q);
        //Si el resultado obtenido no tiene nada
        //Muestra el error y redirige al index
        if( $result->num_rows == 0)
        {
            echo'<script type="text/javascript">
                alert("Usuario o Contraseña Incorrecta");
                 window.location="login.html"
                </script>';
        }
 
        //En otro caso
        //En $reg se guarda el resultado de la consulta
        //Al segundo posición de SESION se le asigna el id del usuario
        //Redirige a página logueada
        else{
            $reg = mysqli_fetch_assoc($result);
            $_SESSION["session"][] = $reg["idUsuario"];
            header("location:principal.php");
        }
 
    }
     public function agregaProducto($merc, $prec){
 
        //Selecciona el producto ingresado para validarlo, en la variable valida
        //está el resultado de la consulta
 
        $nuevo_producto = "select merca from mercancia where merca='$merc'";
       
        $valida = $this->mysqli->query($nuevo_producto);
 
        //Como correo y el usuario son UNIQUE si $valida o $validaUser tienen más de un resultado,
        //el correo ya estaba en la base de datos
        if($valida->num_rows > 0 )
        {
              echo'<script type="text/javascript">
                alert("Error al registrar! - Este producto ya esta registrado");
                window.location="registro.html"
                 javascript:history.go(-1);
                </script>';
        }
        //Sino hubo correo o usuario repetido
        else
        {
            //Inserta en la BD
            $q = "INSERT INTO mercancia (pkMerca, merca, precio) VALUES (' ','$merc','$prec'); ";
 
            $result = $this->mysqli->query($q);
            if($result){ //Si resultado es true, se agregó correctamente
                    echo'<script type="text/javascript">
                        alert("Agregado Exitosamente");
                        window.location="registro.html"
                        </script>';
            }
            else{ //Si hubo error al insertar, se avisa
                echo'<script type="text/javascript">
                     alert("Algo fallo, intente de nuevo");
                     window.location="registro.html"
                      javascript:history.go(-1);
                     </script>';
 
            }
        }
    }
      public function agregaCargador($exist, $model, $type, $price){
 
        //Selecciona el producto ingresado para validarlo, en la variable valida
        //está el resultado de la consulta
 
        $nuevo_cargador = "select modelo from cargadores where modelo='$model'";
       
        $valida = $this->mysqli->query($nuevo_cargador);
 
        //Como solo se puede registrar una vez un solo modelo, validamos que no se repita,
        //el modelo ya estaba en la base de datos
        if($valida->num_rows > 0 )
        {
              echo'<script type="text/javascript">
                alert("Error al registrar! - Este modelo ya esta registrado");
                window.location="registro.html"
                 javascript:history.go(-1);
                </script>';
        }
        //Sino hubo correo o usuario repetido
        else
        {
            //Inserta en la BD
            $q = "INSERT INTO cargadores (pkCargador, existencia, modelo, tipo, precio) VALUES (' ','$exist','$model','$type','$price'); ";
 
            $result = $this->mysqli->query($q);
            if($result){ //Si resultado es true, se agregó correctamente
                    echo'<script type="text/javascript">
                        alert("Agregado Exitosamente");
                        window.location="registroCargadores.html"
                        </script>';
            }
            else{ //Si hubo error al insertar, se avisa
                echo'<script type="text/javascript">
                     alert("Algo fallo, intente de nuevo");
                     window.location="registroCargadores.html"
                      javascript:history.go(-1);
                     </script>';
 
            }
        }
    }
    
       public function agregaProtector($exist, $model, $type, $price){
 
        //Selecciona el producto ingresado para validarlo, en la variable valida
        //está el resultado de la consulta
 
        $nuevo_protector = "select modelo from protectores where modelo='$model'";
       
        $valida = $this->mysqli->query($nuevo_protector);
 
        //Como solo se puede registrar una vez un solo modelo de protector, validamos que no se repita,
        //el modelo ya estaba en la base de datos
        if($valida->num_rows > 0 )
        {
              echo'<script type="text/javascript">
                alert("Error al registrar! - Este protector ya esta registrado");
                window.location="registroProtectores.html"
                 javascript:history.go(-1);
                </script>';
        }
        //Sino hubo correo o usuario repetido
        else
        {
            //Inserta en la BD
            $q = "INSERT INTO protectores (pkProtector, existencia, modelo, tipo, precio) VALUES (' ','$exist','$model','$type','$price'); ";
 
            $result = $this->mysqli->query($q);
            if($result){ //Si resultado es true, se agregó correctamente
                    echo'<script type="text/javascript">
                        alert("Agregado Exitosamente");
                        window.location="registroProtectores.html"
                        </script>';
            }
            else{ //Si hubo error al insertar, se avisa
                echo'<script type="text/javascript">
                     alert("Algo fallo, intente de nuevo");
                     window.location="registroProtectores.html"
                      javascript:history.go(-1);
                     </script>';
 
            }
        }
    }
    public function agregaUsuario($apPat, $apMat, $name, $user,$mail,$contra){
 
        //Selecciona el correo ingresado para validarlo, en la variable valida
        //está el resultado de la consulta
 
        $nuevo_correo = "select correo from usuarios where correo='$mail'";
        $nuevo_usuario = "select nomUsuario from usuarios where nomUsuario='$user'";
        $valida = $this->mysqli->query($nuevo_correo);
        $validaUser = $this->mysqli-> query($nuevo_usuario);
 
        //Como correo y el usuario son UNIQUE si $valida o $validaUser tienen más de un resultado,
        //el correo ya estaba en la base de datos
        if($valida->num_rows > 0 || $validaUser-> num_rows > 0 )
        {
              echo'<script type="text/javascript">
                alert("Error al registrar! - Correo o Usuario Duplicado - Ingresa otro");
                window.location="registro.html"
                 javascript:history.go(-1);
                </script>';
        }
        //Sino hubo correo o usuario repetido
        else
        {
            //Inserta en la BD
            $q = "INSERT INTO usuarios (idUsuario, apePat, apeMat, nombre, nomUsuario, correo, pass) VALUES (' ','$apPat','$apMat', '$name', '$user','$mail','$contra'); ";
 
            $result = $this->mysqli->query($q);
            if($result){ //Si resultado es true, se agregó correctamente
                    echo'<script type="text/javascript">
                        alert("Agregado Exitosamente");
                        window.location="registro.html"
                        </script>';
            }
            else{ //Si hubo error al insertar, se avisa
                echo'<script type="text/javascript">
                     alert("Algo fallo, intente de nuevo");
                     window.location="registro.html"
                      javascript:history.go(-1);
                     </script>';
 
            }
        }
    }
}
 
?>