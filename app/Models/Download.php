<?php

// app/Models/Download.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Download extends Model
{
    use HasFactory;

    protected $fillable = ['cat_download_id', 'download_file', 'name', 'deskripsi'];

    public function catDownload()
    {
        return $this->belongsTo(CatDownload::class);
    }
}
