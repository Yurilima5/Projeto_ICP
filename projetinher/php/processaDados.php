<?php
    include('db.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];

    try{
        $pdo->beginTransaction();

        $stmt = $pdo->prepare("INSERT INTO usuarios (nome,email) VALUES (?,?)");
        $stmt->execute([$nome,$email]);

        $pdo->commit();
    }catch(Exception $e){
        
    }
?>