<?php
    session_start();
    require 'config.php';

    if(isset($_SESSION['banco']) && empty($_SESSION['banco']) == false) {
        
        /*$id = $_SESSION['banco'];
        $sql = $pdo->prepare("SELECT * FROM contas WHERE id = :id");
        $sql->bindValue(":id", $id);
        $sql->execute();*/

    }else {
        header("Location: login.php");
    }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Eletrônico</title>
</head>
<body>
    <h1>Banco</h1>
    Agência: 0000<br/>
    Conta:00000<br/>
    <a href="sair.php">Sair</a>
</body>
</html>