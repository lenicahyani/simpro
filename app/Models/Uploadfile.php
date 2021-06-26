<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uploadfile extends Model
{
    protected $table = 'uploadfile';
    protected $fillable = ['file' ,'keterangan'];
}
