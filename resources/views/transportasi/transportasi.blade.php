@extends('layouts.app_admin')
@section('content')
<div class="row">
    <div class="col-sm-12 col-xl-12">
        <div class="bg-light rounded h-100 p-4">
            <div class="d-flex justify-content-between">
                <h6 class="mb-4">TRANSPORTASI</h6>
                <a href="{{route('transportasi.create')}}" class="btn btn-info m-2"><i class="fas fa-plus"></i></a>
            </div>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Kode Transportasi</th>
                        <th scope="col">Tipe Transportasi</th>
                        <th scope="col">Jumlah Kursi</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($transportasi as $val)
                    <tr>
                        <td>{{ $val->kode_transportasi }}</td>
                        <td>{{ App\Models\TipeTransportasiModel::getById($val->id_tipe_transportasi)->nama_tipe_transportasi ?? '' }}</td>
                        <td>{{ $val->jumlah_kursi }}</td>
                        <td>{{ $val->keterangan }}</td>
                        <td>
                            <a href="{{ route('transportasi.update', ['id_transportasi' => $val->id_transportasi]) }}" class="p-2"><i class="fas fa-edit"></i></a>
                            <a href="{{ route('transportasi.delete', ['id_transportasi' => $val->id_transportasi]) }}" class="p-2"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection