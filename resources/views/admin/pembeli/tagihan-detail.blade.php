@extends('layouts.master-admin')
@section('section-header','Data Detail Tagihan')
@section('content-admin')

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <div class="h3">Detail Tagihan Paket</div>
            </div>
            <div class="card-body">
               <div class="row">
                   <div class="col-lg-4">
                           <div class="d-flex">
                               <img src="{{ asset('img/avatar-1.png') }}" width="100px" alt="">
                               <ul>
                                   <li>Lingga</li>
                                   <li>081213123</li>
                                   <li>Jln Parunghalang</li>
                               </ul>
                           </div>
                   </div>

                   <div class="col">
                        <div class="table-responsive">
                            <table class="table table-striped dataTable no-footer" id="table-1">
                            <thead>
                                <tr role="row">
                                    <th>No</th>
                                    <th>Nama Barang</th>
                                    <th>Harga</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Cunkybar 1kg </td>
                                    <td>Rp 3000</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jelly 1kg </td>
                                    <td>Rp 1500</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Treasure 1kg </td>
                                    <td>Rp 4000</td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        Total
                                    </td>
                                    <td>Rp 8500</td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                   </div>
               </div>
            </div>
            </div>
        </div>

        <div class="col-sm-12">

       
        <div class="card">
            <div class="card-header"><div class="h3">Data Pembayaran</div> <div class="ml-auto"><span class="badge badge-success">Terbayar</span> <span class="badge badge-danger">Menunggak</span></div> </div>
            <div class="card-body d-flex flex-wrap">
                 @for ($i = 1; $i <= 40; $i++)
                <div class="card @if($i < 4) bg-success @elseif($i >= 4 && $i < 6) bg-danger @else bg-secondary @endif mx-1" @if($i < 4) data-container="body" data-toggle="popover" data-placement="top" data-content="21-03-2022" @endif style="width: 70px; height: 70px;">
                    <div class="card-body">
                        <h6 class="text-center">{{$i}}</h6>
                    </div>
                </div>
                @endfor
            </div>
        </div>
        
    </div>
    </div>

    

@endsection

@push('script')
<script>
    // $("#table-1").dataTable({
    //     "columnDefs": [
    //         { "sortable": false, "targets": [2,3] }
    //     ]
    // });
    // $(document).ready(function () {
    //     $('#table-1').DataTable();
    // });
</script>
@endpush