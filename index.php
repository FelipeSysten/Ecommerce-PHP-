<?php

require './lib/autoload.php';

$smarty = new  Template();
  //Rotas::get_Pagina(); para eu ver as minhas rotas na interface

  //valores para o templete

$smarty->assign('NOME','FELIPE DE SOUZA');
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('GET_INICIO', Rotas::get_SiteTEMA());
$smarty->assign('PAG_CARRINHO', Rotas::pag_Carrinho());
$smarty->assign('PAG_CONTATO', Rotas::pag_Contato());
$smarty->assign('PAG_MINHACONTA', Rotas::pag_MinhaConta());
$smarty->assign('TITULO_SITE', Config::SITE_NOME);
$smarty->assign('PAG_PRODUTOS', Rotas::pag_Produtos());
$smarty->assign('PAG_PRODUTOS_INFO', Rotas:: pag_ProdutosInfo());



	//echo Rotas::pag_Carrinho() . '<br/>'; echo mostra na interface

$smarty->display('index.tpl');





?>