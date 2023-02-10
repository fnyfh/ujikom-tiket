@extends('layouts.app_admin')
@section('content')
<div class="row">
    <div class="col-sm-12 col-xl-12">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Edit Rute</h6>
            <form method="POST" action="{{ route('rute.updated') }}">
                @csrf
                <input type="hidden" name="id_rute" value="{{ $rute->id_rute }}">
                <div class="mb-3">
                    <label for="tujuan" class="form-label">Tujuan</label>
                    <input type="text" class="form-control" id="tujuan" name="tujuan" value="{{ $rute->tujuan }}">
                </div>
                <div class="mb-3">
                    <label for="rute_awal" class="form-label">Rute Awal</label>
                    <input type="text" class="form-control" id="rute_awal" name="rute_awal" value="{{ $rute->rute_awal }}">
                </div>
                <div class="mb-3">
                    <label for="rute_akhir" class="form-label">Rute Akhir</label>
                    <input type="text" class="form-control" id="rute_akhir" name="rute_akhir" value="{{ $rute->rute_akhir }}">
                </div>
                <div class="mb-3">
                <label for="transportasi" class="form-label">Transportasi</label>
                    <select name="id_transportasi" id="id_transportasi" class="form-control">
                        <option value="{{ $rute->id_transportasi }}">{{ App\Models\TransportasiModel::getById($rute->id_transportasi)->kode_transportasi }}</option>
                        @foreach($transportasi as $val)
                        @if($rute->id_transportasi != $val->id_transportasi)
                        <option value="{{ $val->id_transportasi }}">{{ $val->kode_transportasi }}</option>
                        @endif
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="number" class="form-control" id="harga" name="harga" value="{{ $rute->harga }}">
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