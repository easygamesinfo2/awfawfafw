<?php

	require_once "modelos/crud_noticia.php";
	$id = $_GET['id'];
    $crud = new crud_noticia();
    $crud->excluir_noticia($id);
    header('Location: exibe_noticia.php');



 ?>