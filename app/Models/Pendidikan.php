<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'tipe_program',
        'deskripsi',
        'konten',
        'gambar',
        'lokasi',
        'tanggal_mulai',
        'tanggal_berakhir',
        'status_pendaftaran',
        'link_pendaftaran',
        'akreditasi',
        'badge',
        'kuota',
        'jadwal',
        'is_active',
    ];


    protected $casts = [
        'tanggal_mulai' => 'date',
        'tanggal_berakhir' => 'date',
        'is_active' => 'boolean',
    ];



}
