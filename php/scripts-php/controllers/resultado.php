<?php
require_once '/var/www/scripts/database/config.php';

$nome = isset($_POST['nome']) ? $_POST['nome'] : null;
$idade = isset($_POST['idade']) ? $_POST['idade'] : null;

if($nome!=null){
$database = new DB();

$conn = $database->getConnection();
$query = "INSERT INTO pessoas (nome, idade) VALUES (?,?)";

$stmt = $conn->prepare($query);
    $stmt->bindParam(1, $nome);
    $stmt->bindParam(2, $idade);
$result = $stmt->execute();

$pessoas = [
    ['nome' => 'João', 'idade' => 30],
];
}
?>