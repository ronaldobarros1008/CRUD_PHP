<?php
    $nome = filter_input(INPUT_GET, "nome");
    $telefone = filter_input(INPUT_GET, "telefone");

    $link = mysqli_connect("localhost","u119541436_root","42mvb9","u119541436_agend");

    if($link){
        $query = mysqli_query($link, "insert into contato values('','$nome','$telefone');");
        if($query){
            header("Location: index.php");
        }else{
            die("Erro: " .mysqli_error($link));
        }
    }else{
        die("Erro: " .mysqli_error($link));
    }
?>