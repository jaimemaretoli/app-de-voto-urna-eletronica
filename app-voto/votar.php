<?php
	$id_eleitor = $_REQUEST["id_eleitor"];
    $id_eleicao = $_REQUEST["id_eleicao"];
    $n_candidato = $_REQUEST["numero"];


    $connect = mysql_connect('MYSQL.FP2.COM.BR','fp207','AwfEle1cao2017');
    $db = mysql_select_db('fp207');
    
    if($n_candidato){
	    $res_candidato = mysql_fetch_array(mysql_query("SELECT * FROM candidato WHERE NUMERO='$n_candidato' AND ATIVO='1'"));
	    $ok = mysql_query("INSERT INTO votacao (ID_ELEITOR,ID_CANDIDATO,ID_CARGO,ID_ELEICAO) VALUES('$id_eleitor','$res_candidato[ID_CANDIDATO]','$res_candidato[ID_CARGO]',$id_eleicao)");
	    
	}else{
		// $ok = mysql_query("INSERT INTO votacao (ID_ELEITOR,ID_CANDIDATO,ID_CARGO,ID_ELEICAO) VALUES('','','')");
	}
 header('Location: concluido.php');
?>