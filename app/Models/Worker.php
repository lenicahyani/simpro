<?php

namespace App\Models;
// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    protected $table = 'worker';
    protected $fillable = ['id','nama_worker' ,'alamat','role','status','email','telepon'];

    public function proyek()
    {
        return $this->belongsToMany(Proyek::class)->withPivot(['id','nama_subproyek','upload','nilai_subproyek','deskripsi','progres','gaji']);
    }
    // public function subproyek()
    // {
    //     return $this->belongsToMany(Subproyek::class);
    // }
}
