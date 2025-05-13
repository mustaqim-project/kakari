<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Streaming extends Model
{
    use HasFactory;

    protected $table = 'streaming';

    protected $fillable = [
        'code_frame',
        'judul',
        'deskripsi',
    ];
}
