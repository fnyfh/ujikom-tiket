@extends('layouts.app_admin')
@section('content')
<div class="row">
    <div class="col-sm-12 col-xl-12">
        <div class="bg-light rounded h-100 p-4">
            <div class="d-flex justify-content-between">
                <h6 class="mb-4">RUTE</h6>
                <a href="{{route('rute.create')}}" class="btn btn-info m-2"><i class="fas fa-plus"></i></a>
            </div>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Tujuan</th>
                        <th scope="col">Transportasi</th>
                        <th scope="col">Rute Awal</th>
                        <th scope="col">Rute Akhir</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($rute as $val)
                    <tr>
                        <td>{{ $val->tujuan }}</td>
                        <td>{{ App\Models\TransportasiModel::getById($val->id_transportasi)->kode_transportasi ?? '' }}</td>
                        <td>{{ $val->rute_awal }}</td>
                        <td>{{ $val->rute_akhir }}</td>
                        <td>{{ $val->harga }}</td>
                        <td>
                            <a href="{{ route('rute.update', ['id_rute' => $val->id_rute]) }}" class="p-2"><i class="fas fa-edit"></i></a>
                            <a href="{{ route('rute.delete', ['id_rute' => $val->id_rute]) }}" class="p-2"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection