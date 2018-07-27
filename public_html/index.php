<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="estilo/estilo.css">
        <link href="estilo/bootstrap.min.css" rel="stylesheet" media="screen">
        <?php
        
            error_reporting(0);
            ini_set(“display_errors”, 0 );

            $parametro = filter_input(INPUT_GET, "parametro");
            $mysqllink = mysql_connect("localhost","u119541436_root","42mvb9");
            mysql_select_db("u119541436_agend");

            if($parametro){
                $dados = mysql_query("select * from contato where nome like '$parametro%' order by nome");
            }else{
                $dados = mysql_query("select * from contato order by nome");
            }

            $linha = mysql_fetch_assoc($dados);
            $total = mysql_num_rows($dados);

        ?>
        <title>Agenda Telefonica</title>
    </head>
<body>
<div class="container">
<div class="row">
<div class="col-xs-12">
    <div id="conteudo">
        <h1>CRUD_PHP Agenda Telefonica</h1>
        
        <p>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="form-horizontal">
                <div class="col-xs-4">
                    <input type="text" name="parametro" class="form-control"/>
                </div>

                <div class="form-group">
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-warning">Buscar</button>
                    </div>
                </div>           
            </form>
        </p>

        <p>
            <div class="col-xs-3">
                <a href="pagina_novocontato.html">
                    <button class="btn bg-primary btn-xs">Adicionar novo</button>
                </a>
            </div>
        </p>
        <br />
        <br />        
        
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-condensed table-hover">
                <thead>
                    <tr class="active">
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Telefone</th>
                    </tr>
                </thead>

            <?php
                if($total){ do{
            ?>
                <tr>
                    <td><?php echo $linha['id'] ?></td>
                    <td><?php echo $linha['nome'] ?></td>
                    <td><?php echo $linha['telefone'] ?></td>
                    <td>
                        <a href="<?php echo "pagina_alterar.php?id=".$linha['id']."&nome=".$linha['nome']."&telefone=".$linha['telefone']?>" class="btn  btn-success btn-xs">
                            Alterar
                        </a>
                    </td>
                    <td><a href="<?php echo "excluir.php?id=".$linha['id']?>" class="btn  btn-danger btn-xs">Excluir</a></td>
                </tr>

                <?php 
                
                    }while($linha = mysql_fetch_assoc($dados));

                    mysql_free_result($dados);}

                    mysql_close($mysqllink);
                
                ?>
            </table>
        </div>
    </div>    
</div>
</div>
</div>
<script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>