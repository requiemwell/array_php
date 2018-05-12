
<!DOCTYPE html>

<html>
    <head>
        <title>cadastro</title>
        <script type="text/javascript">
            function valida(){
                if((document.forms["etapa1"]["nome"].value==="") || (document.forms["etapa1"]["senha"].value==="")){
                alert("preencha todos os campos");
             } else{document.forms["etapa1"].submit();}
            }
        </script>
    </head>
    <body>
        
        <div align="center">
                <h1>Etapa 1</h1>
                <hr>
                <form method="post" action="hidde.php" name="etapa1">
                    
                   Nome <input type="text" name="nome">
                   Senha<input type="password" name="senha">
                   <input type="button" onClick="valida();" value="enviar">
                </form>
        </div>

    </body>
</html>

