<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subproyek extends Model
{
    protected $table = 'proyek_worker';
    protected $fillable = ['id','proyek_id','worker_id','nama_subproyek','nilai_subproyek','deskripsi','progres','upload'];
    
  // public function worker()
  //   {
  //       return $this->HasMany(Worker::class);
  //   }


}
