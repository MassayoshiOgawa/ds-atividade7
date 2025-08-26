<?php

include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['titulo_livro'])) {
    
        $titulo_livro = $_POST['titulo_livro'];
        $genero_livro = $_POST['genero_livro'];
        $anopublicacao_livro = $_POST['anopublicacao_livro'];
        $fk_autor = $_POST['fk_autor'];

        $sql = "INSERT INTO livros VALUES (default, '$titulo_livro', '$genero_livro', '$anopublicacao_livro', $fk_autor)";

        if ($conn->query($sql) === true) {
            echo "Novo registro criado com sucesso.";
        } else {
            echo "Erro " . $sql . '<br>' . $conn->error;
        }
        $conn->close();
    }

?>