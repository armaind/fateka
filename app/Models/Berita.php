<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'berita';

    protected $fillable = [
        'judul',
        'headline',
        'kategori',
        'author',
        'tanggal',
        'user_id',
        'isi_berita'
    ];
}
