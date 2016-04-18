<html>
    <head>
        <title>cadastro</title>     
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="icon" href="../imagens/Sub-logoPrefeitura.png">
        <link rel="stylesheet" href="../css/bootstrap.min.css">

        <link rel="stylesheet" href="../css/validate.css">

        <script src="../js/jquery.min.js" type="text/javascript"></script>
        <script src="../js/jquery.validate.js" type="text/javascript"></script> 

    </head>
        
    <body>
        <div class="container" style="margin: 5%;">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-2">


                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"style="text-align: center;">Cadastro de Usuário</h3>
                        </div>
                        <div class="panel-body">
                            <form action="../Controle/ControleUsuario.php"  method="post" class="validate form-horizontal">

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="name">
                                        Nome Completo </label>
                                    <div class="col-sm-6">
                                        <input  type="text" name="nome" id="nome" class="form-control required"  minlength="5" />
                                        <span class="inv">Digite o nome</span>

                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label class="col-sm-3 control-label" for="name">
                                        Nome da Secretária </label>
                                    <div class="col-sm-6">
                                        <input  type="text" name="secretaria" id="nome" class="form-control required"  minlength="5" />
                                        <span class="inv">Digite o nome da Secretária</span>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="lastname1">CPF</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control required cpf" id="cpf" name="cpf"  minlength="5" />
                                        <span class="inv">Campo requerido, informe um CPF válido</span>
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label class="col-sm-3 control-label" for="name">
                                        Nome do Secretario(a) Responsável </label>
                                    <div class="col-sm-6">
                                        <input  type="text" name="secretario" id="nome" class="form-control required"  minlength="5" />
                                        <span class="inv">Digite o nome do Secretario</span>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="email1">Email</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control required email" id="email" name="email" />
                                        <span class="inv">Informe um e-mail válido</span>                

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="username1">Telefone</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control required fone" id="fone" name="telefone" placeholder="Username" />
                                        <span class="inv">Informe telefone com DDD</span>

                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="col-sm-9 col-sm-offset-3">
                                        <button type="submit" class="btn btn-primary" name="signup1" value="Sign up">Cadastrar</button>
                                        <a href="../index.php" class="btn btn-default">Cancelar</a>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
