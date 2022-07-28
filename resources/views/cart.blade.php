@extends('layouts.app-cs')
@section('content')
  
       <section id="cart" class="my-5">
           <div class="container">
            <h2 class="text-center my-3">Keranjang</h2>
               <div class="card">
                   <div class="card-header">1 Barang di keranjang</div>
                   <div class="card-body">
                       <div class="row justify-content-center">
                           <div class="col-lg-12">
                              <div class="table-responsive">
                                  <table class="table">
                                  <thead>
                                    <tr>
                                      <th scope="col">No</th>
                                      <th scope="col">Gambar</th>
                                      <th scope="col">Nama Barang</th>
                                      <th scope="col">Harga</th>
                                      <th scope="col">Jumlah</th>
                                      <th scope="col">Subtotal</th>
                                      <th scope="col">Aksi</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <th scope="row">1</th>
                                      <td><img src="{{ asset('img/cunkybar.jpg') }}" alt="" width="120px"></td>
                                      <td>Cunkybar 1kg</td>
                                      <td>Rp 3500</td>
                                      <td> 
                                        <input type="number" class="form-control" style="width:4rem;">
                                    </td>
                                    <td>
                                        Rp 3500
                                    </td>
                                    <td>
                                        <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                                    </td>
                                    </tr>
                                    <tr>
                                        <td colspan="5"><b>Total</b></td>
                                        <td colspan="2" class="text-left"><b>Rp 3500 / minggu</b></td>
                                    </tr>
                                  </tbody>
                                </table>

                              </div>
                            </div>
                       </div>

                       <div class="row justify-content-between">
                           <div class="col-4">
                               <a href="#">Kembali Belanja</a>
                           </div>
                           <div class="col-4">
                               <button class="btn btn-primary float-right">Beli</button>
                           </div>
                       </div>
                   </div>
               </div>
           </div>   
       </section>
        
@endsection