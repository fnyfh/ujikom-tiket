@extends('layouts.app_admin')
@section('content')
@if(session('user')->id_level === 3)
<div class="row">
    <div class="col-sm-12 col-xl-12">
        <div class="bg-light rounded h-100 p-4">
            <div class="d-flex justify-content-between">
                <h6 class="mb-4">PEMESANAN TIKET TRANSPORTASI</h6>
            </div>
            <div class="flex my-3">
                @foreach($rute as $val)
                <div class="card d-inline-block" style="border:1px dashed #0c0c0c;">
                    <div class="card-body">
                        <div class="d-flex align-items-center position-relative">
                            <div class="position-absolute" style="right: 0; top: 0">
                                <i class="fas fa-credit-card"></i>
                            </div>
                            <div>
                                <small>Tujuan</small>
                                <h6>{{$val->tujuan}}</h6>
                            </div>
                            <div style="border-left: 1px dashed #000000; height: 1.5rem" class="mx-3"></div>
                            <div>
                                <small>Harga</small>
                                <h6>{{$val->harga}}</h6>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="p-3 border me-2">
                                <small>Rute Awal</small>
                                <h6>{{$val->rute_awal}}</h6>
                            </div>
                            <div class="p-3 border">
                                <small>Rute Akhir</small>
                                <h6>{{$val->rute_akhir}}</h6>
                            </div>
                        </div>
                        <div class="mt-3 text-end">
                            <a href="{{ route('dashboard', ['id_rute' => $val->id_rute]) }}" class="btn btn-dark">Pesan Tiket</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @if(isset($choiceTicket->tujuan))
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body border-bottom py-3">
                            <div class="h5 d-flex align-items-center">Detail Tiket</div>
                            <hr class="mt-0">
                            <div>
                                <div class="d-flex">
                                    <div class="mt-1 rounded p-2 d-inline-block" style="border: 1 px dashed #0c0c0c">
                                        <small>Tujuan</small>    
                                        <span class="h6 mb-0">{{$choiceTicket->tujuan}}</span>
                                    </div>
                                    <div class="mt-1 rounded p-2 d-inline-block" style="border: 1 px dashed #0c0c0c">
                                        <small>Harga</small>    
                                        <span class="h6 mb-0">{{$choiceTicket->harga}}</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mt-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <small>Rute Awal</small>
                                            <div>
                                                <span class="h6 mb-0">{{$choiceTicket->rute_awal}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mx-2">
                                        gambar
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                        <small>Rute Akhir</small>
                                            <div>
                                                <span class="h6 mb-0">{{$choiceTicket->rute_akhir}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="mt-3">
                                    <a href="http://" class="btn btn-dark">Bayar Tiket</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">

                        </div>
                    </div>
                </div>
            </div>
            @endif
    </div>
</div>
@else
DASHBOARD
@endif
@endsection