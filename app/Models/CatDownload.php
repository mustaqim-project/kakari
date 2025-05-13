<?php

// app/Models/CatDownload.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatDownload extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function downloads()
    {
        return $this->hasMany(Download::class);
    }
}
