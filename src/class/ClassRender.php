<?php

namespace Src\Class;

class ClassRender
{
    /**
     * propriedades
     */
    private $diretorio;
    private $titulo;

    public function setDiretorio($v)
    {
        $this->diretorio = $v;
    }
    public function getDiretorio()
    {
        return $this->diretorio;
    }
    public function setTitulo($v)
    {
        $this->titulo = $v;
    }
    public function getTitulo()
    {
        return $this->titulo;
    }
    /**
     * responsavel por renderizar todo layout
     *
     * @return void
     */
    public function renderLayout()
    {
        include_once(DIRREQ . "/app/view/Layout.php");
    }

    public function renderLayoutPainel()
    {
        include_once(DIRREQ . "/app/view/LayoutPainel.php");
    }
    /**
     * adiciona caracteristicas ao head
     *
     * @return void
     */
    public function addHead()
    {
        if (file_exists(DIRREQ . "/app/view/{$this->getDiretorio()}/Head.php")) {
            include(DIRREQ . "/app/view/{$this->getDiretorio()}/Head.php");
        }
    }
    /**
     * adiciona caracteristicas ao header
     *
     * @return void
     */
    public function addHeader()
    {
        if (file_exists(DIRREQ . "/app/view/{$this->getDiretorio()}/Header.php")) {
            include(DIRREQ . "/app/view/{$this->getDiretorio()}/Header.php");
        }
    }

    /**
     * adiciona caracteristicas ao main
     *
     * @return void
     */
    public function addMain()
    {
        if (file_exists(DIRREQ . "/app/view/{$this->getDiretorio()}/Main.php")) {
            include(DIRREQ . "/app/view/{$this->getDiretorio()}/Main.php");
        }
    }

    /**
     * adiciona conteudo
     *
     * @return void
     */
    public function addSide()
    {
        if (file_exists(DIRREQ . "/app/view/{$this->getDiretorio()}/Side.php")) {
            include(DIRREQ . "/app/view/{$this->getDiretorio()}/Side.php");
        }
    }

    /**
     * adiciona caracteristicas ao footer
     *
     * @return void
     */
    public function addFooter()
    {
        if (file_exists(DIRREQ . "/app/view/{$this->getDiretorio()}/Footer.php")) {
            include(DIRREQ . "/app/view/{$this->getDiretorio()}/Footer.php");
        }
    }

    public function addLayoutCompleto()
    {
        if (file_exists(DIRREQ . "/app/view/{$this->getDiretorio()}/Index.php")) {
            include(DIRREQ . "/app/view/{$this->getDiretorio()}/Index.php");
        }
    }
}
