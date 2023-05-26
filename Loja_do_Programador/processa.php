<?php
    session_start();
    include_once("conexao.php");

    $nome = filter_input(INPUT_POST, 'nome');
    $telefone = filter_input(INPUT_POST, 'telefone');
    $email = filter_input(INPUT_POST, 'email');
    $senha = filter_input(INPUT_POST, 'senha');

    $result_usuario = "INSERT INTO usuarios (nome, telefone, email, senha) VALUES ('$nome','$telefone','$email','$senha')";
    $resultado_usuario = mysqli_query($conn,$result_usuario);
