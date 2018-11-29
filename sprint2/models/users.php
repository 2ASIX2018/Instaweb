<?php
class User{
    public function validateUser($user, $pass){
        try{
            require_once "dbconfig.php";
            $ConnectionString="mysql:host=".$dbhost["host"].";dbname=".$dbhost['db'];
            $db = new PDO($ConnectionString, $dbhost["user"], $dbhost["password"]);

            $query = $db->prepare('SELECT rol FROM Usuarios WHERE nombre = ? AND password = ?');
            $query->execute(array($user, $pass));
            $role=false;
            while($fila=$query->fetch()){
                $role=$fila[0];
            }
            $db=null;
            return $role;
        }
        catch (Exception $e){
            echo("Error:".$e->getMessage());
            $db=null;
        }
    }
    public function listUsers(){
        try{
            require_once "dbconfig.php";
            $ConnectionString="mysql:host=".$dbhost["host"].";dbname=".$dbhost['db'];
            $db = new PDO($ConnectionString, $dbhost["user"], $dbhost["password"]);

            $query = $db->prepare('SELECT id_usuari, nombre, email, rol FROM Usuarios ORDER BY id_usuari ASC');
            $query->execute();
            $usuarios=array();
            while($fila=$query->fetch()){
                $usuario["id_usuari"]=$fila[0];
                $usuario["nombre"]=$fila[1];
                $usuario["email"]=$fila[2];
                $usuario["rol"]=$fila[3];
                array_push($usuarios, $usuario);
            }
            $db=null;
            return $usuarios;
        }
        catch (Exception $e){
            echo("Error:".$e->getMessage());
            $db=null;
        }
    }
    public function registerUser($user, $email, $pass){
        try{
            require_once "dbconfig.php";
            $ConnectionString="mysql:host=".$dbhost["host"].";dbname=".$dbhost['db'];
            $db = new PDO($ConnectionString, $dbhost["user"], $dbhost["password"]);


            $querycheck = $db->prepare('SELECT * FROM Usuarios WHERE nombre = ? OR email = ? LIMIT 1');
            $querycheck->execute(array($user, $email));
            $resultado=$querycheck->fetch();
            
            if ($resultado){
                echo "El usuario o email ya se encuentra registrado";
            }
            else{

                $query = $db->prepare("INSERT INTO `Usuarios` (`id_usuari`, `nombre`, `email`, `password`, `rol`) VALUES (NULL, ?, ?, ?, 'user')");
                $query->execute(array($user, $email, $pass));
                header("location: registrationsuccess.php");
            }
            $db=null;
        }
        catch (Exception $e){
            echo("Error:".$e->getMessage());
            $db=null;
        }
    }
}
?>