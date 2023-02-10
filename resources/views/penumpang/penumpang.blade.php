@extends('layouts.app_admin')
@section('content')
<div class="row">
    <div class="col-sm-12 col-xl-12">
        <div class="bg-light rounded h-100 p-4">
            <div class="d-flex justify-content-between">
                <h6 class="mb-4">PENUMPANG</h6>
            </div>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Telepon</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($penumpang as $val)
                    <tr>
                        <td>{{ $val->nama_penumpang }}</td>
                        <td>{{ $val->alamat_penumpang }}</td>
                        <td>{{ $val->tanggal_lahir }}</td>
                        <td>{{ $val->jenis_kelamin }}</td>
                        <td>{{ $val->telepon }}</td>
                        <td>
                            <a href="{{ route('penumpang.delete', ['id_penumpang' => $val->id_penumpang]) }}" class="p-2"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection