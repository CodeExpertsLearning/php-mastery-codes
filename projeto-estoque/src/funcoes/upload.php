<?php 

function upload($arquivo, $subpasta = null, $imagemRemover = null) {

    $extensao = strrchr($arquivo['name'], '.');
    $novoNome = md5($arquivo['name']) . uniqid() . $extensao;

    if(!is_dir(PASTA_UPLOADS)) {
        mkdir(PASTA_UPLOADS, 755, true);
    }

    if(!is_dir(PASTA_UPLOADS . $subpasta)) {
        mkdir(PASTA_UPLOADS . $subpasta, 755, true);
    }

    $novoNome = $subpasta ?  $subpasta . '/' . $novoNome
                          : $novoNome;

    if(!move_uploaded_file($arquivo['tmp_name'], PASTA_UPLOADS . $novoNome)) {
        return false;
    }

    if($imagemRemover && file_exists(PASTA_UPLOADS . $imagemRemover)) {
        unlink(PASTA_UPLOADS . $imagemRemover);
    }

    return $novoNome;
}