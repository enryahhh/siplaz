@extends('layouts.master-admin')
@section('section-header','Data Tagihan')
@section('content-admin')

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <div class="h3">Daftar Tagihan Pelanggan</div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped dataTable no-footer" id="table-1">
                        <thead>
                            <tr role="row">
                                <th>No</th>
                                <th>Nama Pembeli</th>
                                <th>Paket</th>
                                <th>Total</th>
                                <th>Terbayar</th>
                                <th>Menunggak</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Lingga</td>
                                <td>
                                    <ol>
                                        <li>Cunkybar 1kg - 3000</li>
                                        <li>Jelly 1kg - 2500</li>
                                        <li>Treasure 1kg - 4000</li>
                                    </ol>
                                </td>
                                <td>Rp 8500 / minggu</td>
                                <td>
                                    3 minggu - Rp 25.500
                                </td>
                                <td>
                                    2 minggu - Rp 17.000
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('tagihan.detail') }}" class="btn btn-info mx-1">Detail</a>
                                    <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Bayar</button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@include('admin.pembeli.modal-bayar')

@push('script')
<script>
    // $("#table-1").dataTable({
    //     "columnDefs": [
    //         { "sortable": false, "targets": [2,3] }
    //     ]
    // });
    $(document).ready(function () {
        $('#table-1').DataTable();
    });
</script>
@endpush