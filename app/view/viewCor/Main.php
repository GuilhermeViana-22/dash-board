<?php

use App\Model\ClassSelect;
use Src\Class\ClassRota;

$parse = new ClassRota;
$paginaAtual = $parse->parseUrl()[4];
$cor  = $parse->parseUrl()[3];
$quantidadeResultPorPagina = 10;
$inicio = ($quantidadeResultPorPagina * $paginaAtual) - $quantidadeResultPorPagina;

$methodDeRequisao = $_SERVER['REQUEST_METHOD'];

$new = new ClassSelect;
$resul = $resultado = $new->selectDadosBancoCores2($cor, $inicio, $quantidadeResultPorPagina);
?>


<main style="margin: 20px 20px;">
    <div class="container_load">
        <div class="spinner-box">
            <div class="three-quarter-spinner"></div>
        </div>
    </div>
    <div class="container_tabela">
        <div class="box_tabela">
            <div class="title_session">
                <p class="p_title"><?php echo $cor ?></p>
            </div>

            <div class="content_table">
                <div class="box_search">
                    <div class="search_table">
                        <input type="text" placeholder="Procurar">
                        <i class="fas icon_search fa-search"></i>
                    </div>
                </div>

                <div class="dados_table">
                    <div class="over_scroll">
                        <table class="table">
                            <tr class="table_top">
                                <td class="coll_acao">Acao</td>
                                <td>Gestor</td>
                                <td>Codigo</td>
                                <td>Valor</td>
                                <td>Inspirado</td>
                            </tr>

                            <?php
                            foreach ($resul as $key => $value) {
                                echo "
                                        <tr class='table_dados'>
                                            <td>
                                                <div class='acao_table'>
                                                    <span class='ver'>Ver</span>
                                                </div>
                                                <div class='acao_table'>
                                                    <span class='baixar'>Baixar</span>
                                                </div>
                                            </td>
                                            <td>{$value['gestor']}</td>
                                            <td>{$value['codigo']}</td>
                                            <td>{$value['valor']}</td>
                                            <td>{$value['inspirado']}</td>
                                        </tr>
                                    ";
                            }
                            ?>
                        </table>
                    </div>
                </div>

                <div class="paginacao_php">
                    <div class="container_pg_php">
                        <a href="" class="link_page pg_um">
                            <i class="fas icon_page icon_inicio fa-chevron-left"></i>
                            <i class="fas icon_page icon_inicio fa-chevron-left"></i>
                        </a>
                        <a class="link_page box_pages" href="">1</a>
                        <a class="link_page box_pages" href="">2</a>
                        <a class="link_page box_pages" href="">3</a>
                        <a class="link_page box_pages" href="">4</a>
                        <a class="link_page box_pages" href="">5</a>
                        <a href="" class="link_page pg_end">
                            <i class="fas icon_end icon_page fa-chevron-left"></i>
                            <i class="fas icon_end icon_page fa-chevron-left"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>