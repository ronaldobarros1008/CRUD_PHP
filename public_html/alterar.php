<?php
    $id = filter_input(INPUT_GET, "id");
    $nome = filter_input(INPUT_GET, "nome");
    $telefone = filter_input(INPUT_GET, "telefone");

    $link = mysqli_connect("localhost","u119541436_root","42mvb9","u119541436_agend");

    if($link){
        $query = mysqli_query($link, "update contato set nome='$nome', telefone='$telefone' where id='$id';");
        if($query){
            header("Location: index.php");
        }else{
            die("Erro: " .mysqli_error($link));
        }
    }else{
        die("Erro: " .mysqli_error($link));
    }
?>