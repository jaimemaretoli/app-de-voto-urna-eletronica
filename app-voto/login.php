<?php 
    
    $login = $_POST["login"];
    $entrar = $_POST["entrar"];
    $senha = $_POST["senha"];

    $connect = mysql_connect('MYSQL.FP2.COM.BR','fp207','AwfEle1cao2017');
    $db = mysql_select_db('fp207');
 
        $verifica = mysql_query("SELECT * FROM eleitor WHERE LOGIN = '$login' AND SENHA = '$senha'") or die("erro ao selecionar");
        if (mysql_num_rows($verifica)<=0){
            echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.html';</script>";
            die();
        }else{
            $res_eleitor = mysql_fetch_array(mysql_query("SELECT ID_ELEITOR FROM eleitor WHERE LOGIN = '$login'"));
            setcookie("login",$login);
            header('location: /Projeto/ihc/voto.php?id_eleitor=' . $res_eleitor["ID_ELEITOR"]);
        }
 