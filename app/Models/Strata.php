<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Strata extends Model
{
    use HasFactory;
    protected $table = "strata";
    protected $gurded = ["id"];
    public $timestamps = false;
}
