<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index(){
        $data = Pengumuman::orderByDesc("id")->limit(1)->first();
        return view("v_beranda", $data);
    }
}
