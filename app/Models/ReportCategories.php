<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportCategories extends Model
{
    use HasFactory;

    protected $fillable = 'nama_report_categories';

    protected $primaryKey = 'id_report_categories';
}
