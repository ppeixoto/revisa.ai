<?php

namespace App\Services;

use App\Models\User;

class FileService
{
    public function storeAndCreateFile(User $user, $file, $disk = 'public')
    {
        $path = $file->store('files', $disk);

        $file = $user->files()->create([
            'name' => $file->getClientOriginalName(),
            'path' => $path,
            'extension' => $file->getClientOriginalExtension(),
            'mime_type' => $file->getMimeType(),
            'size' => $file->getSize(),
            'hash' => $file->hashName(),
            'disk' => $disk,
            'url' => $file->storePublicly('files', $disk),
        ]);

        return $file;
    }
}
