<?php
namespace App\Services;

use Illuminate\Support\Facades\Storage;

class FileService
{
    public function saveFile($file, $path)
    {
        // Simpan file ke storage
        Storage::disk('public')->put($path, $file);
    }
}
