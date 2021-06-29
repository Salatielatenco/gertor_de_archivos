<?php
    class Usuario {
        private object $conexion;
        private string $host = 'localhost';
        private string $user = 'root';
        private string $db = 'gestor-tareas';
        private string $password = '';

        public function __construct() {
            $this->conexion = new PDO("mysql:host=$this->host;dbname=$this->db", $this->user, $this->password);
        }

        public function insertar(array $datos) {
            $query = 'INSERT INTO usuarios(nombre, paterno, materno, sexo, nacimiento, email, contrasenia) values(:nombre, :paterno, :materno, :sexo, :nacimiento, :email, :contrasenia)';
            $stmt = $this->conexion->prepare($query);
            $stmt->bindParam(':nombre', $datos['nombre']);
            $stmt->bindParam(':paterno', $datos['paterno']);
            $stmt->bindParam(':materno', $datos['materno']);
            $stmt->bindParam(':sexo', $datos['sexo']);
            $stmt->bindParam(':nacimiento', $datos['nacimiento']);
            $stmt->bindParam(':email', $datos['email']);
            $stmt->bindParam(':contrasenia', $datos['contrasenia']);
            $stmt->execute();
            unset($this->conexion);
            return $stmt;
        }
    }
?>