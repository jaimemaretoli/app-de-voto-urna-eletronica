<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Urna</title>

        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <link rel="shortcut icon" href="assets/ico/favicon.png">
        
    </head>

    <body>
    <div class="inner-bg">
        <div class="container">
            <div class="row">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text">
                        <h1 style="color: white">Faça seu <strong>voto</strong></h1>
                    </div>
                </div>

                <form action="votar.php" method="post" id="form">
                    <input type="hidden" name="id_eleitor" value="32">
                    <input type="hidden" name="id_eleicao" value="5">
                    <input type="text"  class="disabled" name="numero" id="numero">
                </form>
                
                <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                            <div class="form-bottom" style="height: 540px;">
                                <form role="form" action="login.php" method="post" class="">
                                <!-- <form method="POST" action="login.php"> -->
                                    <div class="form-group">
                                        <table class="table tbl_voto" align="right" id="table_num">
                                        <tr>
                                            <td><button type="button" id="btn_voto_1" value="1" class="btn btn-default">1</button></td>
                                            <td><button type="button" id="btn_voto_2" value="2" class="btn btn-default">2</button></td>
                                            <td><button type="button" id="btn_voto_3" value="3" class="btn btn-default">3</button></td>
                                        </tr>
                                        <!-- <label class="sr-only" for="form-username">Nome de usuário</label> -->
                                        <!-- <input type="text" name="login" id="login"> -->
                                        <!-- <input type="text" name="login" placeholder="Nome de usuário..." class="form-username form-control" id="login"> -->
                                    </div>
                                    <div class="form-group">
                                        <table class="table tbl_voto" align="right" id="table_num">
                                        <tr>
                                            <td><button type="button" id="btn_voto_4" value="4" class="btn btn-default">4</button></td>
                                            <td><button type="button" id="btn_voto_5" value="5" class="btn btn-default">5</button></td>
                                            <td><button type="button" id="btn_voto_6" value="6" class="btn btn-default">6</button></td>
                                        </tr>
                                        <!-- <label class="sr-only" for="form-password">Senha</label> -->
                                        <!-- <input type="password" name="senha" id="senha"> -->
                                        <!-- <input type="password" name="senha" placeholder="Senha..." class="form-password form-control" id="senha"> -->
                                    </div>
                                    <div class="form-group">
                                        <table class="table tbl_voto" align="right" id="table_num">
                                        <tr>
                                            <td><button type="button" id="btn_voto_7" value="7" class="btn btn-default">7</button></td>
                                            <td><button type="button" id="btn_voto_8" value="8" class="btn btn-default">8</button></td>
                                            <td><button type="button" id="btn_voto_9" value="9" class="btn btn-default">9</button></td>
                                        </tr>
                                        <!-- <label class="sr-only" for="form-password">Senha</label> -->
                                        <!-- <input type="password" name="senha" id="senha"> -->
                                        <!-- <input type="password" name="senha" placeholder="Senha..." class="form-password form-control" id="senha"> -->
                                    </div>
                                    <div class="form-group">
                                        <table class="table tbl_voto" align="right" id="table_num">
                                        <tr>
                                            <td><button type="button" id="btn_branco" class="btn btn-default"><b>BRANCO</b></button></td>
                                        </tr>
                                        <tr>
                                            <td><button type="button" id="btn_corrige" class="btn btn-warning" style="color: black"><b>CORRIGE</b></button></td>
                                        </tr>
                                        <tr>
                                            <td><button type="button" id="btn_confirma" class="btn btn-success" style="color: black"><b>CONFIRMA</b></button></td>
                                        </tr>
                                        <!-- <label class="sr-only" for="form-password">Senha</label> -->
                                        <!-- <input type="password" name="senha" id="senha"> -->
                                        <!-- <input type="password" name="senha" placeholder="Senha..." class="form-password form-control" id="senha"> -->
                                    </div>
                                    <!-- <input type="submit" value="entrar" id="entrar" name="entrar"> -->
                                    <!-- <button type="submit" value="entrar" id="entrar" name="entrar" class="btn">Entrar</button> -->
                                </form>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>    

        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>

        <script type="text/javascript">
            $(function () {
                $('button').click(function () {
                    $('#numero').val($('#numero').val() + $(this).val());
                });

                $('#btn_branco').on('click', function () {
                    $('#form').submit();
                });

                $('#btn_corrige').on('click', function () {
                    $('#numero').val('');
                });

                $('#btn_confirma').on('click', function () {
                    $('#form').submit();
                });
            });
        </script>
    </body>
</html>