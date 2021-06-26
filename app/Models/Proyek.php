<?php

namespace App\Models;


// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyek extends Model
{
    protected $table = 'proyek';
    protected $fillable = ['id','customer' ,'nama_proyek' ,'nilai_proyek', 
    'pimpinan_proyek', 'status','tanggal_estimasi' ];

    public function worker()
    {
        return $this->belongsToMany(Worker::class)->withPivot(['id','nama_subproyek','upload','nilai_subproyek','deskripsi','progres','gaji'])->withTimeStamps();
    }
}


