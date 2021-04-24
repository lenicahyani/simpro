<?php

namespace App\Models;


// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyek extends Model
{
    protected $table = 'proyek';
    protected $fillable = ['customer' ,'nama_proyek' ,'nilai_proyek', 
    'termin' ,'pimpinan_proyek', 'status', 'total_pembayaran',
    'tanggal_estimasi' ];

    public function worker()
    {
        return $this->belongsToMany(Worker::class)->withPivot(['nama_subproyek','nilai_subproyek','deskripsi','progres'])->withTimeStamps();
    }

}


