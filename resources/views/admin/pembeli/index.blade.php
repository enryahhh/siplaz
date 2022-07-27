@extends('layouts.master-admin')
@section('section-header','Data Pelanggan')
@section('content-admin')

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <div class="h3">Daftar Pelanggan</div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped dataTable no-footer" id="table-1">
                        <thead>
                            <tr role="row">
                                <th>No</th>
                                <th>Nama Pembeli</th>
                                <th>Alamat</th>
                                <th>No Hp</th>
                                <th>Foto</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Lingga</td>
                                <td>Jln Parunghalang NO 07</td>
                                <td>12345678</td>
                                <td><img src="{{ asset('img/avatar-1.png') }}" alt="" width="100px"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
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
    $(document).ready(function () {
        $('#table-1').DataTable();
    });
</script>
@endpush