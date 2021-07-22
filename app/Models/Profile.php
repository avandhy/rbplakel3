<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public function user()
    {
        return $this->belongsTo('User');
    }
    use HasFactory;
    protected $fillable = [
        'university',
        'major',
        //'id_question',
        //'id_answer',
        //'id_file',
        'semester',
        'motto',
        'photo'

    ];
}
