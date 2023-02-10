@extends('layouts.app_admin')
@section('content')
<div class="row">
    <div class="col-sm-12 col-xl-12">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Tambah Transportasi</h6>
            <form method="POST" action="{{ route('transportasi.store') }}">
                @csrf
                <div class="mb-3">
                    <label for="kode_transportasi" class="form-label">Kode Transportasi</label>
                    <input type="text" class="form-control" id="kode_transportasi" name="kode_transportasi" placeholder="Masukan kode transportasi">
                </div>
                <div class="mb-3">
                    <label for="jumlah_kursi" class="form-label">Jumlah Kursi</label>
                    <input type="number" class="form-control" id="jumlah_kursi" name="jumlah_kursi" placeholder="Masukan jumlah kursi">
                </div>
                <div class="mb-3">
                    <label for="keterangan" class="form-label">Keterangan</label>
                    <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Masukan keterangan">
                </div>
                <div class="mb-3">
                <label for="id_tipe_transportasi" class="form-label">Tipe Transportasi</label>
                    <select name="id_tipe_transportasi" id="id_tipe_transportasi" class="form-select">
                        @foreach($nama_tipe_transportasi as $val)
                        <option value="{{ $val->id_tipe_transportasi }}">{{ $val->nama_tipe_transportasi }}</option>
                        @endforeach
                    </select>
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