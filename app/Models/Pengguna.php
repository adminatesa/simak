<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Pengguna extends Authenticatable
{
    use HasFactory;

    protected $table = "pengguna";
    protected $gurded = ["id","waktu_dibuat"];
    public $timestamps = false;
}
