<!DOCTYPE html>

<html>
    <head>
        <title>title</title>
    </head>
    <body>
        <div align="center">
            <h1> Etepa 2</h1>
            <hr>
            <form action="processa.php" method="post">
                <?php 
                    $param = filter_input_array(INPUT_POST, FILTER_DEFAULT)
                            
                ?>
                <input type="hidden" name ="nome" value="<?php echo $param['nome'] ?>">
                <input type="hidden" name="senha" value="<?php echo $param['senha']?>">
                <input type="text"   name="tel"/>telefone<br><br>
                <input type="text"   name="endereco"/>endereco<br><br>
                <input type="submit" value="finalizar">
            </form>
        </div>
    </body>
</html>
