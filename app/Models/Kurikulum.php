<?php

namespace App\Models;

use App\Models\Kurikulum as ModelsKurikulum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kurikulum extends Model
{
    use HasFactory;
    protected $table = "kurikulum";
    protected $gurded = ["id"];
    public $timestamps = false;

}
