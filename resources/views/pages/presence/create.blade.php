@extends('layouts.main')

@section('content')
<div class="container my-4">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col">
                    <h4 class="card-title">
                        Tambah Kegiatan
                    </h4>
                </div>
                <div class="col text-end">
                    <a href="{{route('presence.index')}}" class="btn btn-secondary">
                        Kembali
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{route('presence.store')}}" method="post">
                <!-- untuk bisa mengirim request -->
                @csrf
                <div class="mb-3">
                    <label for="tujuan_kegiatan">Tujuan Kegiatan</label>
                    <input type="text" class="form-control" name="tujuan_kegiatan" id="tujuan_kegiatan"
                        value="{{old('tujuan_kegiatan')}}">
                    @error('tujuan_kegiatan')
                    <div class="text-danger small">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="tgl_kegiatan">Tanggal Kegiatan</label>
                    <input type="date" class="form-control" name="tgl_kegiatan" id="tgl_kegiatan"
                        value="{{old('tgl_kegiatan')}}">
                    @error('tgl_kegiatan')
                    <div class="text-danger small">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="waktu_mulai">Waktu Mulai</label>
                    <input type="time" class="form-control" name="waktu_mulai" id="waktu_mulai"
                        value="{{old('waktu_mulai')}}">
                    @error('waktu_mulai')
                    <div class="text-danger small">{{$message}}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection