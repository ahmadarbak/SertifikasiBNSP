@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">ARSIP SURAT >> LIHAT</h1>
    </div>
    @foreach ($surat as $s)
        <h5>Nomor : {{ $s->nomor_surat }}</h5>
        <h5>Kategori : {{ $s->kategori }}</h5>
        <h5>Judul : {{ $s->judul }}</h5>
        <h5>Waktu Unggah : {{ $s->created_at }}</h5>
        
        <p align="center"><embed type="application/pdf" src="/assets/1636976954.pdf" width="600" height="400"></embed></p>
        <a href="{{ url('/edit-surat', $s->id) }}" class="btn btn-secondary mb-3"><span data-feather="edit"></span>
            Edit/Ganti File
        </a>
        <a href="{{ url('/download', $s->file) }}" class="btn btn-primary mb-3"><span data-feather="download"></span>
            Download
        </a>
    @endforeach

@endsection
