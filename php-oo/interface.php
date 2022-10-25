<?php 

interface Exportar
{
    public function exportar();
}

class ExportarCSV implements Exportar
{
    public function exportar()
    {
        return 'Exporte feito em csv';
    }
}

class ExportarJson implements Exportar
{
    public function exportar()
    {
        return 'Exporte feito em json';
    }
}

$exportar = new ExportarJson();

echo $exportar->exportar();