<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul_report',
        'deskripsi_report',
        'id_report_categories',
        'id_user',
    ];

    protected $primaryKey = 'id_report';
}
