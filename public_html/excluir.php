<?php
     $id = filter_input(INPUT_GET, "id");

     $link = mysqli_connect("localhost","u119541436_root","42mvb9","u119541436_agend");

     if($link){
        $query = mysqli_query($link, "delete from contato where id='$id'");
        if($query){
            header("Location: index.php");
        }else{
            die("Erro: " .mysqli_error($link));
        }
    }else{
        die("Erro: " .mysqli_error($link));
    }
?>