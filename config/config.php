<?php

#Arquivos diretórios raízes
$PastaInterna = "dash-board";
define('DIRPAGE', "http://{$_SERVER['HTTP_HOST']}/{$PastaInterna}");
if (substr($_SERVER['DOCUMENT_ROOT'], -1) == '/') {
    define('DIRREQ', "{$_SERVER['DOCUMENT_ROOT']}{$PastaInterna}");
} else {
    define('DIRREQ', "{$_SERVER['DOCUMENT_ROOT']}/{$PastaInterna}");
}

#Diretórios Específicos
define('DIRIMG', DIRPAGE . "/public/assets/img/");
define('DIRCSS', DIRPAGE . "/public/assets/css/");
define('DIRJS', DIRPAGE . "/public/assets/js/");

#Acesso ao banco de dados
define('HOST', "localhost");
define('DB', "dashboard");
define('USER', "root");
define('PASS', "");
