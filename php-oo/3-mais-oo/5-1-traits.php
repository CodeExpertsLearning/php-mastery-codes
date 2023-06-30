<?php 

trait Upload
{
    public $pasta;

    public function fazerUpload()
    {
        return 'Upload realizado...';
    }
}


class ProdutoFoto
{
    use Upload;
}

class AvatarUsuario
{
    use Upload;
}

echo (new ProdutoFoto())->fazerUpload();
echo PHP_EOL;
echo (new AvatarUsuario())->fazerUpload();
