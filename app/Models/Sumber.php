<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sumber extends Model
{
    use HasFactory;

    // Tentukan nama tabel (opsional, jika nama tabel berbeda dari default plural)
    protected $table = 'sumber';

    // Tentukan kolom yang dapat diisi (fillable) untuk keamanan
    protected $fillable = ['nama'];

    // Jika Anda ingin menambahkan timestamp secara otomatis
    // (created_at, updated_at) maka pastikan kolom tersebut ada di tabel
    public $timestamps = true;  // Ini sudah diatur secara default jadi bisa dihilangkan
}