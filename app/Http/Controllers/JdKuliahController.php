<?php

namespace App\Http\Controllers;

use App\Models\Kurikulum;
use App\Models\MataKuliah;
use App\Models\Strata;
use App\Models\TahunAkademik;
use App\Models\TahunSemester;
use Illuminate\Http\Request;

class JdKuliahController extends Controller
{
   public function jdkuliah(Request $request){
        $matakuliah = MataKuliah::where("strata_id", $request->id)->get();
        dd($matakuliah);
    }

    public function index(Request $request){
        $strata = Strata::all();
        $tahunsemester = TahunSemester::all();
        return view("v_jadwalkuliah", compact(["strata","tahunsemester"]));
    }
}
