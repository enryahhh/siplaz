@extends('layouts.master-admin')
@section('section-header','Pengaturan')
@section('content-admin')

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <div class="h3">Pengaturan</div>
            </div>
            <div class="card-body">
                 <form action="">
                    <div class="form-group">
                        <label for="">Password Baru</label>
                        <input type="number" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Confirm Password Baru</label>
                        <input type="number" class="form-control" readonly="">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
