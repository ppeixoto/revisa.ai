<?php

namespace App\Services;

use App\Models\File;

class PdfService
{
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
