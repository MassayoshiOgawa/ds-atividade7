CREATE DATABASE blibiotecaCrud;
use blibiotecaCrud;

create table autores (
	id_autor int primary key auto_increment not null,
    nome_autor varchar(255),
    nacionalidade_autor varchar(100),
    anonascimento date
);

create table livros(
	id_livro int primary key auto_increment,
    titulo_livro varchar(255),
    genero_livro varchar(255),
    anopublicacao_livro date,
    fk_autor int,
    foreign key (fk_autor) references autores(id_autor)
);

create table leitores (
	id_leitor int primary key auto_increment,
    nome_leitor varchar(255),
    email_leitor varchar(255),
    telefone_leitor varchar(11)
);

create table emprestimos (
	id_emprestimo int primary key auto_increment,
    fk_livro int,
    fk_leitor int,
	data_emprestimo timestamp default current_timestamp,
    data_devolucao date,
    foreign key (fk_livro) references livros(id_livro),
    foreign key (fk_leitor) references leitores(id_leitor)
);
