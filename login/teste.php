<?php

require "Usuario.class.php";

$exito = $usuario = new Usuario();

if($exito){
    /*
    $nome = "Girafarles";
    $email = "girafarles@gmail.com";
    $senha = "123456";

    $usuario->cadastrar($nome, $email, $senha);*/
    
}
else{
    echo "<script>
    confirm('Erro ao conectar. Tente mais tarde')
    <script>";
    
}





