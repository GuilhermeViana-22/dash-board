<?php

namespace Src\Class;

class ClassRender
{

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





    public function renderLayout()
    {
        include_once(DIRREQ . "/app/view/Layout.php");
    }

    public function renderLayoutPainel()
    {
        include_once(DIRREQ . "/app/view/LayoutPainel.php");
    }

    public function addHead()
    {
        if (file_exists(DIRREQ . "/app/view/{$this->getDiretorio()}/Head.php")) {
            include(DIRREQ . "/app/view/{$this->getDiretorio()}/Head.php");
        }
    }

    public function addHeader()
    {
        if (file_exists(DIRREQ . "/app/view/{$this->getDiretorio()}/Header.php")) {
            include(DIRREQ . "/app/view/{$this->getDiretorio()}/Header.php");
        }
    }

    public function addMain()
    {
        if (file_exists(DIRREQ . "/app/view/{$this->getDiretorio()}/Main.php")) {
            include(DIRREQ . "/app/view/{$this->getDiretorio()}/Main.php");
        }
    }

    public function addSide()
    {
        if (file_exists(DIRREQ . "/app/view/{$this->getDiretorio()}/Side.php")) {
            include(DIRREQ . "/app/view/{$this->getDiretorio()}/Side.php");
        }
    }

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
