<?php
/**
 * Created by PhpStorm.
 * User: gabri
 * Date: 14/05/2018
 * Time: 08:43
 */

class noticia
{
    private $id;
    private $titulo;
    private $descricao;

    public function __construct($id = null, $titulo = null, $descricao = null)
    {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->descricao = $descricao;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * @return mixed
     */
    public function getDescricao()
    {
        return $this->descricao;
    }


}

