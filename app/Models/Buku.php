<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $table ='bukus';
    protected $fillable = [
        'gambar',
        'judul',
        'penulis',
        'penerbit',
        'tahun_terbit',
        'stok'
    ];
}