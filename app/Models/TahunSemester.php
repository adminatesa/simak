<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TahunSemester extends Model
{
    use HasFactory;
    protected $table = "tahun_semester";
    protected $gurded = ["id"];
    public $timestamps = false;

    public function tahunakademik(){
        return $this->belongsTo(TahunAkademik::class, "tahun_akademik_id","id");
    }
}
