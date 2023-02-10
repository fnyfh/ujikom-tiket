@extends('layouts.app_admin')
@section('content')
<div class="row">
    <div class="col-sm-12 col-xl-12">
        <div class="bg-light rounded h-100 p-4">
            <div class="d-flex justify-content-between">
                <h6 class="mb-4">LAPORAN TOTAL PENDAPATAN</h6>
            </div>

            <form method="GET" action="" class="card-header row  py-3 mb-4">
                <div class="col-lg-3">
                    <div class="form-group">
                        <label for="smallSelect">TANGGAL AWAL</label>
                        <input type="date" class="form-control" name="from_date" value="{{ request()->from_date ? request()->from_date : "" }}">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                    <label for="smallSelect">TANGGAL AKHIR</label>
                        <input type="date" class="form-control" name="to_date" value="{{ request()->to_date ? request()->to_date : "" }}">
                    </div>
                </div>
                <div class="col-lg-2">
                    <button style="margin-top: 20px" class="btn btn-primary"><i class="flaticon-interface-4"></i> FILTER</button>
                </div>
            </form>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Bulan</th>
                        <th scope="col">Total Pendapatan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Februari</td>
                        <td>1000000</td>
                    </tr>
                    <tr>
                        <td>Februari</td>
                        <td>1000000</td>
                    </tr>
                    <tr>
                        <td>Februari</td>
                        <td>1000000</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection