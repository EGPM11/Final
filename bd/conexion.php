<?php
class Database{
    private $hstname = "localhost";
    private $database = "dblibreria";
    private $usernames = "root";
    private $password = "";
    private $charset = "utf8";
}
function conectar() {
    try {
    $conexion = "msql:host=" . $this->hostname . ";dbname=" . $this->database . ";charset=" . $this->charset;
    option = [
        PDO::ATTR_ERRMODE => PDO::ERRM => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false
    ];

    $pdo = new PDO($conexion, $this->username, $this->password, $options);
    return $pdo;
} catch (PDOException $e) {
    echo 'Error conexion: ' . $e->getMessage();
    exit;
}
}
?>
<?php
require 'config/config.php';
$db = new Database();
$con = $db->conectar();

$sql = $con->prepare("SELECT id, titulo, precio, tipo FROM titulos");
$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
?>