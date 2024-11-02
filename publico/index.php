<?php 

if(!array_key_exists('PATH_INFO',$_SERVER) || $_SERVER['PATH_INFO']  == "/") {
    require_once( __DIR__ ."/../pagina-inicial.php");
}else if($_SERVER["PATH_INFO"] == "/admin") {
    require_once(__DIR__ ."/../admin.php");
}else if($_SERVER["PATH_INFO"] == "/cadastrar") {
    require_once(__DIR__ ."/../cadastrar-produto.php");
}else if($_SERVER["PATH_INFO"] == "/excluir") {
    require_once(__DIR__ ."/../excluir-produto.php");
}else if($_SERVER["PATH_INFO"] == "/editar-produto") {
    require_once(__DIR__ ."/../editar-produto.php");
}else if($_SERVER["PATH_INFO"] == "/gerador-pdf") {
    require_once(__DIR__ ."/../gerador-pdf.php");
}



