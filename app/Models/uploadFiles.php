<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class uploadFiles extends Model
{
    use HasFactory;

    protected $table = "upload_files";
    protected $primarykey = "id_file";
    protected $fillable = ['nama_file','universitas_file', 'matakuliah_file', 'semester_file','deskripsi_file', 'file', 'id_user', 'nama_user'];
}
