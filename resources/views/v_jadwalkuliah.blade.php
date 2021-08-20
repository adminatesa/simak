@extends('layout.v_template')
@section ('title','Jadwal Kuliah')


@section ('content')

          <div class="card card-default">
          <div class="card-header">
            <h3>Jadwal Kuliah Program Studi</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <form action="{{route('post_jdkuliah')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Strata</label>
                        <select name="strata" class="form-control select2bs4" style="width: 100%;">
                            @foreach ($strata as $st)
                                <option value="{{$st->id}}">{{$st->kode}}-{{ $st->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                <!-- /.form-group -->
                    <div class="form-group">
                    <label>Tahun Akademik</label>
                    <select name="ts" class="form-control select2bs4"  style="width: 100%;">
                        @foreach ($tahunsemester as $ts)
                        <option value="{{$ts->id}}">
                            {{ $ts->tahunakademik->tahun_akademik}} -
                            @if ($ts->semester_id != 2)
                                Ganjil
                            @else
                                Genap
                            @endif
                        </option>
                    @endforeach
                    </select>
                    </div>
                    <div class="form-group">
                        <label>Program Studi</label>
                        <select name="ps" class="form-control select2bs4"  style="width: 100%;">
                        <option selected="selected">- Pilih -</option>
                        <option>Pendidikan Bahasa Inggris</option>
                        <option>Pendidikan Bahasa & Sastra Indonesia</option>
                        <option>Pendidikan Matematika</option>
                        <option>Pendidikan Ekonomi</option>
                        <option>PPKN</option>
                        <option>Ilmu Komputer</option>
                        <option>Teknologi Pangan</option>
                        <option>Teknik Industri</option>
                        <option>Magister Pendidikan Ekonomi</option>
                        </select>
                    </div>
                    <input type="submit" value="Tampilkan" class="btn btn-primary" />
                </div>
            </form>
            <div class="col-md-2">
                    <span class="field-validation-valid" data-valmsg-for="MayorID" data-valmsg-replace="true"></span>
            </div>
        </div>
     <!-- /.form-group -->
@endsection

