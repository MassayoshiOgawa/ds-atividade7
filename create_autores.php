<?php

include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['nome_autor'])) {
        $nome_autor = $_POST['nome_autor'];
        $nacionalidade_autor = $_POST['nacionalidade_autor'];
        $anonascimento = $_POST['anonascimento'];
        
        $sql = " INSERT INTO autores VALUES (default, '$nome_autor', '$nacionalidade_autor', '$anonascimento')";
        
        if ($conn->query($sql) === true) {
            echo "Novo registro criado com sucesso.";
        } else {
            echo "Erro " . $sql . '<br>' . $conn->error;
        }
        $conn->close();
    }

?>