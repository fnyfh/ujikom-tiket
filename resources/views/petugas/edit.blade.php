@extends('layouts.app_admin')
@section('content')
<div class="row">
    <div class="col-sm-12 col-xl-12">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Edit Petugas</h6>
            <form method="POST" action="{{ route('petugas.updated') }}">
                @csrf
                <div class="mb-3">
                    <label for="nama_petugas" class="form-label">Nama Petugas</label>
                    <input type="text" class="form-control" id="nama_petugas" name="nama_petugas" value="{{ $petugas->nama_petugas }}">
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" value="{{ $petugas->username }}">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" value="{{ $petugas->password }}">
                </div>
                <div class="mb-3">
                <label for="level" class="form-label">Level</label>
                    <select name="id_level" id="id_level" class="form-control">
                        <option value="">{{ App\Models\LevelModel::getById($petugas->id_level)->nama_level }}</option>
                        @foreach($level as $val)
                        <option value="{{ $val->id_level }}">{{ $val->nama_level }}</option>
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