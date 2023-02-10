@extends('layouts.app_admin')
@section('content')
<div class="row">
    <div class="col-sm-12 col-xl-12">
        <div class="bg-light rounded h-100 p-4">
            <div class="d-flex justify-content-between">
                <h6 class="mb-4">PETUGAS</h6>
                <a href="{{route('petugas.create')}}" class="btn btn-info m-2"><i class="fas fa-plus"></i></a>
            </div>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Level</th>
                        <th scope="col">Nama Petugas</th>
                        <th scope="col">Username</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($petugas as $val)
                    <tr>
                        <td>{{ App\Models\LevelModel::getById($val->id_level)->nama_level }}</td>
                        <td>{{ $val->nama_petugas }}</td>
                        <td>{{ $val->username }}</td>
                        <td>
                            <a href="{{ route('petugas.update', ['id_petugas' => $val->id_petugas]) }}" class="p-2"><i class="fas fa-edit"></i></a>
                            <a href="{{ route('petugas.delete', ['id_petugas' => $val->id_petugas]) }}" class="p-2"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection