<?php

namespace App\Services;

use App\Models\File;

class PdfService
{
    /*
        1 Lauda = 1.250 caracteres
        Revisão Gramatical R$5,50 / Lauda
        Revisão gramatical e reorganização textual R$ 7,50
        Leitura Crítica de textos literários, até 10 laudas R$100,00
        A partir de 10 laaudas acrescenta-se R$3,50/lauda
        Formatação ABNT de dissertação, tese, monografia e outros textos R$3,50 /lauda
    */

    public function countWordsInPDFFileUploaded(File $file)
    {
        $file = storage_path('app/public/' . $file->path);
        $text = shell_exec("pdftotext $file -");
        $text = preg_replace('/\s+/', ' ', $text);
        $text = trim($text);
        $wordCount = str_word_count($text);

        return $wordCount;
    }

    public function countPDFWordsWithps2ascii(File $file)
    {
        $file = storage_path('app/public/' . $file->path);
        $text = shell_exec("ps2ascii $file");
        $text = preg_replace('/\s+/', ' ', $text);
        $text = trim($text);
        $wordCount = str_word_count($text);

        return $wordCount;
    }

    //pdftotext
    //https://github.com/spatie/pdf-to-text
}
