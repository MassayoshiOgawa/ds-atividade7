<?php

include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $fk_leitor = $_POST['fk_leitor'];
        $fk_livro = $_POST['fk_livro'];
        $data_devolucao = $_POST['data_devolucao'];
        
        $sql = "INSERT INTO emprestimos VALUES (default, '$fk_livro', '$fk_leitor', default, '$data_devolucao')";
        
        if ($conn->query($sql) === true) {
            echo "Novo registro criado com sucesso.";
        } else {
            echo "Erro " . $sql . '<br>' . $conn->error;
        }
        $conn->close();
    }

?>