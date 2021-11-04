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
$quantidade = $new->contarItemsdaTabela($cor);
$quantidadeNum = $quantidade[0]['COUNT(*)'];
$pg_quantidade = ceil($quantidadeNum / $quantidadeResultPorPagina)
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
                <input class="token_hash" type="text" value="<?php echo $_SESSION['token_hash'] ?>" hidden>
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
                                <td class="coll_acao">Acoes</td>
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
                                            <td style='display: none;'>
                                                <input class='value_id' value='{$value['id']}'></input>
                                            <td>
                                        </tr>
                                    ";
                            }
                            ?>
                        </table>
                    </div>
                </div>

                <div class="paginacao_php">
                    <div class="container_pg_php">
                        <?php
                        $maximo_link = 4;
                        echo "
                                <a href='" . DIRPAGE . "/painel/viewCor/{$_SESSION['token_hash']}/$cor/1' class='link_page pg_um'>
                                    <i class='fas icon_page icon_inicio fa-chevron-left'></i>
                                    <i class='fas icon_page icon_inicio fa-chevron-left'></i>
                                </a>
                            ";


                        for ($pag_ant = $paginaAtual - $maximo_link; $pag_ant <= $paginaAtual - 1; $pag_ant++) {
                            if ($pag_ant >= 1) {
                                echo "
                                        <a class='link_page box_pages' href='" . DIRPAGE . "/painel/viewCor/{$_SESSION['token_hash']}/$cor/$pag_ant'>$pag_ant</a>
                                    ";
                            }
                        }

                        echo "
                                <span class='link_page box_pages' style='background: green;'>$paginaAtual</span>
                            ";

                        for ($pag_next = $paginaAtual + 1; $pag_next <= $paginaAtual + $maximo_link; $pag_next++) {
                            if ($pag_next <= $pg_quantidade) {
                                echo "
                                    <a class='link_page box_pages' href='" . DIRPAGE . "/painel/viewCor/{$_SESSION['token_hash']}/$cor/$pag_next'>$pag_next</a>
                                ";
                            }
                        }

                        echo "
                                <a href='" . DIRPAGE . "/painel/viewCor/{$_SESSION['token_hash']}/$cor/{$pg_quantidade}' class='link_page pg_end'>
                                    <i class='fas icon_end icon_page fa-chevron-left'></i>
                                    <i class='fas icon_end icon_page fa-chevron-left'></i>
                                </a>
                            ";
                        ?>
                    </div>
                </div>

                <div class="modal_view">
                    <div class="top_modal">
                        <div></div>
                        <span class="title_modal">Tabela <?php echo $cor ?></span>
                        <i class="fas icon_exit fa-times"></i>
                    </div>

                </div>

            </div>
            <div class="exite_page"></div>
        </div>
    </div>
</main>