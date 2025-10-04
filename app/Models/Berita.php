<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model; 

class Berita extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'isi',
        'tanggal',
        'gambar',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
