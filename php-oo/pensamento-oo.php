<?php 

class Relatorio
{
    public function verRelatorio(Exportar $exportar)
    {
        $pegarDados = ['ok', 'ok'];

        return $exportar->exportarDados($pegarDados);
    }
}

interface Exportar
{
    public function exportarDados($dados);
}

class ExportarJson implements Exportar
{
    public function exportarDados($dados)
    {
        return json_encode($dados);
    }
}

class ExportarXML implements Exportar
{
    public function exportarDados($dados)
    {
        return 'Exportar: XML';
    }
}

class ExportarHTML implements Exportar
{ 
    public function exportarDados($dados)
    {
        return 'Exportar HTML';
    }
}

class ExportarTXT implements Exportar
{ 
    public function exportarDados($dados)
    {
        return 'Exportar TXT';
    }
}


$exportar = new ExportarTXT();
$relatorio = new Relatorio();

echo $relatorio->verRelatorio($exportar);