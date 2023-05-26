<?php
    session_start();
    include_once("conexao.php");

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";

        $result = $conn->query($sql);

        if($result->num_rows > 0){
            echo "Login realizado com sucesso.";
            
        }else{
            echo "Dados inválidos";
        }
    }
    $conn->close();
?>