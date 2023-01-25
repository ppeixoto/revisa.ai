<?php

namespace App\Services;

class PdfService
{
    public function countWordsInPDFFileUploaded($file)
    {
        $file = $file->getRealPath();
        $text = shell_exec("pdftotext $file -");
        $text = preg_replace('/\s+/', ' ', $text);
        $text = trim($text);
        $wordCount = str_word_count($text);

        return $wordCount;
    }

    public function countPDFWordsWithps2ascii($file)
    {
        $file = $file->getRealPath();
        $text = shell_exec("ps2ascii $file");
        $text = preg_replace('/\s+/', ' ', $text);
        $text = trim($text);
        $wordCount = str_word_count($text);

        return $wordCount;
    }

    //pdftotext
    //https://github.com/spatie/pdf-to-text
}
