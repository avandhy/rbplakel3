<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'isi_jawaban',
        'gambar_jawaban'
    ];

    protected $primaryKey = 'id_answer';
}
