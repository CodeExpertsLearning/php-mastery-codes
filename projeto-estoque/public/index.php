<?php 
require __DIR__ . '/../bootstrap.php';

$pagina = isset($_GET['pagina']) ? $_GET['pagina'] : '/'; 

if($pagina == '/') {
    $titulo = 'Listagem de Produtos';

    require TEMPLATES . '/lista.phtml';
}

if($pagina == '/produto') {

    $codigoProduto = isset($_GET['codigo']) ? $_GET['codigo'] : '';

    if($codigoProduto) {
        $produtoDetalhe = '';

        //foreach(PRODUTOS as $produto) {

          //  if($produto['codigo'] == $codigoProduto) {
            //    $produtoDetalhe = $produto;
              //  break;    
            //}
        //}

        //php.net/array_filter
        $produtoDetalhe = array_filter(PRODUTOS, function($produto) use($codigoProduto) {
            return $produto['codigo'] == $codigoProduto;
        });
        
        //php.net/current
        $produtoDetalhe = current($produtoDetalhe);
        
    }

    if(!$codigoProduto || !isset($produtoDetalhe) || !$produtoDetalhe) 
        die('Produto não existe');

    
    $titulo = 'Detalhes do Produto';
    
    require TEMPLATES . '/produto.phtml';
}

if($pagina == '/produto/criar') {
    require TEMPLATES . '/criar-produto.phtml';
}

if($pagina == '/produto/salvar') {
    print '<pre>';
    var_dump($_POST);
    var_dump($_FILES);
}