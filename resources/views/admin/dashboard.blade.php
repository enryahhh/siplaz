@extends('layouts.master-admin')
@section('section-header','Dashboard')
@section('content-admin')

<div class="row">
    {{-- <div class="col-md-3">
    <!-- card penjualan -->
    <div class="card card-statistic-2">
                <div class="card-stats">
                  <div class="card-stats-title">Statistik Penjualan
                    <div class="dropdown d-inline">
                      <a class="font-weight-600 dropdown-toggle" data-toggle="dropdown" href="#" id="orders-month">Semua</a>
                      <ul class="dropdown-menu dropdown-menu-sm">
                        <li class="dropdown-title">Select Month</li>
                        <li><a href="#" class="dropdown-item">Semua</a></li>
                        <li><a href="#" class="dropdown-item">January</a></li>
                        <li><a href="#" class="dropdown-item">February</a></li>
                        <li><a href="#" class="dropdown-item">March</a></li>
                        <li><a href="#" class="dropdown-item">April</a></li>
                        <li><a href="#" class="dropdown-item">May</a></li>
                        <li><a href="#" class="dropdown-item">June</a></li>
                        <li><a href="#" class="dropdown-item">July</a></li>
                        <li><a href="#" class="dropdown-item">August</a></li>
                        <li><a href="#" class="dropdown-item">September</a></li>
                        <li><a href="#" class="dropdown-item">October</a></li>
                        <li><a href="#" class="dropdown-item">November</a></li>
                        <li><a href="#" class="dropdown-item">December</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-shopping-bag"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Penjualan</h4>
                  </div>
                  <div class="card-body">
                    <span>{{$pendapatan['jml_trs']}}</span>
                  </div>
                </div>
              </div>
    </div> --}}
    <!-- end card stat penjualan -->
    <div class="col-md-3 d-flex align-items-stretch">
        <div class="card card-statistic-1 pt-3">
            <div class="card-icon bg-primary">
                <i class="fas fa-boxes"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                <h4>Jumlah Paket</h4>
                </div>
                <div class="card-body">
                    10
                </div>
            </div>
        </div>
    </div>


    <!-- card stok -->
    <div class="col-md-3 d-flex align-items-stretch">
        <div class="card card-statistic-1 pt-3">
            <div class="card-icon bg-primary">
                <i class="fas fa-users"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                <h4>Jumlah Pelanggan</h4>
                </div>
                <div class="card-body">
                    10
                {{--$jumlah['jml_stok']--}}
                </div>
            </div>
        </div>
    </div>
    <!-- end card stok -->

        <!-- card jumlah barang -->
    <div class="col-md-3 d-flex align-items-stretch">
        <div class="card card-statistic-1 pt-3">
            <div class="card-icon bg-primary">
                <i class="fas fa-boxes"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                <h4>Total Saldo</h4>
                </div>
                <div class="card-body">
                    Rp 95.000
                </div>
            </div>
        </div>
    </div>
    <!-- end card jumlah barang -->

    <!-- card stok -->
    {{-- <div class="col-md-3 d-flex align-items-stretch">
        <div class="card card-statistic-1 pt-3">
            <div class="card-icon bg-primary">
                <i class="fas fa-dollar-sign"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                <h4>Total Pendapatan</h4>
                </div>
                <div class="card-body">
                
                    <h6 class="mt-1">Rp {{number_format($pendapatan['pendapatan'],0,'','.')}}</h6>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- end card stok -->


</div>


@endsection