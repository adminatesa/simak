@extends('layout.v_template')
@section ('title','Beranda')

@section ('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h3>Pengumuman</h3>
            <div class="card bg-light">
                <div class="card-header bg-info">
                    {{$judul}}
                </div>
                <div class="card-body">
                    {!! $isi !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
