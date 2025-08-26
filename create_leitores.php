<?php

include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['nome_leitor'])) {
        $nome_leitor = $_POST['nome_leitor'];
        $email_leitor = $_POST['email_leitor'];
        $telefone_leitor = $_POST['telefone_leitor'];
        
        $sql = "INSERT INTO leitores VALUES (default, '$nome_leitor', '$email_leitor', '$telefone_leitor')";
        
        if ($conn->query($sql) === true) {
            echo "Novo registro criado com sucesso.";
        } else {
            echo "Erro " . $sql . '<br>' . $conn->error;
        }
        $conn->close();
    }

?>