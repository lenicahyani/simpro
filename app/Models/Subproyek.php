<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subproyek extends Model
{
    protected $table = 'subproyek';
    protected $fillable = ['nama_proyek' ,'nama_tugas','deskripsi','tim','progres'];
}
