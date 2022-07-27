@extends('layouts.app-cs')
@section('content')

<header>
            
        <div class="jumbotron jumbotron-fluid">
          <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="hero">
                        <img src="{{asset('img/hero.svg')}}" alt="" width="100%">
                    </div>
                </div>
                <div class="col-lg-7">
                    <h1 class="display-4 fw-bold lh-1 mb-3">RAYAKAN IDUL FITRI <br>DENGAN YANG MANIS MANIS</h1>
                    <button class="btn btn-primary btn-lg px-4" id="belanja" data-id="content">Belanja</button>
                </div>
            </div>
          </div>
        </div>
        </header>

        <section id="content">
            <h3 class="text-center">Daftar Paket Coklat</h3>
            <div class="container">
                <div class="row mb-2 justify-content-between">
                    <div class="col-lg-3">
                        <input type="text" class="form-control" placeholder="Cari">
                    </div>

                    <div class="col-lg-2">
                        <a href="#">Lihat Semua</a>
                    </div>
                </div>

                <div class="row" id="list-card-paket">
                    
                </div>

                <nav aria-label="...">
                  <ul class="pagination">
                    <li class="page-item disabled">
                      <a class="page-link">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active" aria-current="page">
                      <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#">Next</a>
                    </li>
                  </ul>
                </nav>
            </div>
        </section>
        
@endsection