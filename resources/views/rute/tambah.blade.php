@extends('layouts.app_admin')
@section('content')
<div class="row">
    <div class="col-sm-12 col-xl-12">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Tambah Rute</h6>
            <form method="POST" action="{{ route('rute.store') }}">
                @csrf
                <div class="mb-3">
                    <label for="tujuan" class="form-label">Tujuan</label>
                    <input type="text" class="form-control" id="tujuan" name="tujuan" placeholder="Masukan tujuan">
                </div>
                <div class="mb-3">
                    <label for="rute_awal" class="form-label">Rute Awal</label>
                    <input type="text" class="form-control" id="rute_awal" name="rute_awal" placeholder="Masukan rute awal">
                </div>
                <div class="mb-3">
                    <label for="rute_akhir" class="form-label">Rute Akhir</label>
                    <input type="text" class="form-control" id="rute_akhir" name="rute_akhir" placeholder="Masukan rute akhir">
                </div>
                <div class="mb-3">
                <label for="transportasi" class="form-label">Transportasi</label>
                    <select name="id_transportasi" id="id_transportasi" class="form-control">
                        <option value="">--Pilih--</option>
                        @foreach($transportasi as $val)
                        <option value="{{ $val->id_transportasi }}">{{ $val->kode_transportasi }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="number" class="form-control" id="harga" name="harga" placeholder="Masukan harga">
                </div>
                <div class="pb-4">
                    <div class="float-end">
                        <a href="{{url()->previous()}}">Batal</a>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
                
            </form>
        </div>
    </div>
</div>
@endsection