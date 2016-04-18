
<!DOCTYPE html>
<html>
    <head>
        <title>cadastro</title>     
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="icon" href="imagens/Sub-logoPrefeitura.png">
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <link rel="stylesheet" href="css/validate.css">

        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/jquery.validate.js" type="text/javascript"></script> 

    </head>

    <body>
        <img src="imagens/Logo1-Prefeitura.jpg" class="img-rounded" alt="Cinque Terre" width="304" height="236">
        <div class="container">

            <form role="form" class="validate" action="Controle/ControleUsuario.php" method="post" >

                <div class="form-group">
                    <p>
                        <label>Nome completo: </label>
                        <input type="text" name="nome" id="nome" class="form-control required" minlength="5" />
                        <span>Informe seu nome completo</span>

                    </p> 
                </div>
                <div class="form-group">
                    <p>
                        <label>Nome Secretária: </label>
                        <input type="text" name="secretaria" id="nome" class="form-control required" minlength="5" />
                        <span>Informe nome da secretária</span>

                    </p> 
                </div>
                <div class="form-group">
                    <p>
                        <label>CPF: </label>
                        <input type="text" name="cpf" id="cpf" class="form-control required cpf" minlength="5" />
                        <span>Campo requerido, informe um CPF válido</span>

                    </p> 
                </div>
                <div class="form-group">
                    <p>
                        <label>Nome Secretario(a) Responsável: </label>
                        <input type="text" name="secretario" id="nome" class="form-control required" minlength="5" />
                        <span>Informe nome do secretario</span>
                    </p> 
                </div>
                <div class="form-group">
                    <p>
                        <label>Telefone: </label>
                        <input type="text" name="telefone" id="fone" class="form-control required fone"/>
                        <span>Informe seu telefone com DDD</span>
                    </p> 
                </div>
                <div class="form-group">
                    <p>
                        <label>Email: </label>
                        <input type="text" name="email" id="email" class="form-control required email"/>
                        <span>Campo requerido, informe um e-mail válido</span>                
                    </p> 
                </div>
                <p>
                    <button class="button blue submit">Cadastrar</button>
                    <button class="button gray reset">Limpar</button>
                </p>

            </form>
 <p><a href="index.php">voltar a página anterior</a></p>
        </div>
        <img src="imagens/Sub-logoPrefeitura.png" class="img-circle direito-inferior"> 
    </body>
    <style>
        .direito-inferior{ 
            position:relative;
            float:right;
            width:162px;
            height:161px; 
        }
    </style>
</html>

