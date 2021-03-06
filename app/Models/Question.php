<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public $table = "question";
    use HasFactory;

    protected $fillable = [
        'judul',
        'isi_pertanyaan',
        'gambar_pertanyaan',
        'id_user'
    ];

    protected $primaryKey = 'id_question';

    //public function Question()
    //{
    //    return $this->hasMany(Answer::class);
   // }
}
