<html>
 <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilo/estilo.css">
    <link href="estilo/bootstrap.min.css" rel="stylesheet" media="screen">
    <script src="js/jquery.min.js"></script>
    <title>Agenda Telefonica | Alterar</title>

    <?php
        $id = filter_input(INPUT_GET, "id");
        $nome = filter_input(INPUT_GET, "nome");
        $telefone = filter_input(INPUT_GET, "telefone");
    ?>

 </head>
 <body>
 <div class="container">
<div class="row">
<div class="col-xs-12">
    <div id="conteudo">
        <h1>Alterar contato</h1>
        <p>
            <form action="alterar.php" class="form-horizontal">
            <div class="form-group">

                <input type="hidden" name="id" value="<?php echo $id ?>" />
                
                <label for="nome" class="col-xs-2 control-label">Nome:</label>
                <div class="col-xs-6"> 
                    <input type="text" name="nome" value="<?php echo $nome ?>" class="form-control"/>
                </div>
                <br/>
                <br/>
                
                <label for="nome" class="col-xs-2 control-label">Telefone:</label> 
                <div class="col-xs-3">
                    <input type="text" id="fone" name="telefone" value="<?php echo $telefone ?>" class="form-control"/>
                </div>
                <br/>
                <br/>

                <div class="form-group">
                    <div class="col-xs-offset-2 col-xs-7">
                        <button type="submit" class="btn btn-info">Alterar</button>
                    </div>
                </div>               
                
            </form>
            </div>
        </p>
    </div>
    </div>
    </div>
    </div>
    <script src="js/jQuery.js"></script>
    <script src="js/mask.js"></script>
    
 </body>
</html>