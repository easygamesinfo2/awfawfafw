<?php
/**
 * Created by PhpStorm.
 * User: gabri
 * Date: 14/05/2018
 * Time: 10:11
 */

require_once "../modelos/crud_noticia.php";


if(isset($_GET['acao'])){
    $acao = $_GET['acao'];
}else{
    $acao = "index";
}

switch ($acao){
    case 'index':
        echo '<pre>';
        $crud = new crud_noticia();
        $noticias = $crud->get_noticias();
        include "../cria_noticia.html";
        include "../semantic/semantic.css";
        break;

    case 'inserir':
        if (!isset($_POST['inserir'])) {
            include '../cria_noticia.html';
        }
        else{
        	$titulo = $_POST['titulo'];
            $descricao = $_POST['descricao'];
            $nova_noticia = new noticia($titulo,$descricao);
            $crud = new crud_noticia();
            $crud->insert_noticia($nova_noticia);
            header('Location: noticias.php');
        }
}

