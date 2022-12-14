<div class="modal fade" id="myModal" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel">Detail Transaksi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-bordered" style="font-size: 14px;">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Kode Barang</th>
                <th scope="col">Nama Barang</th>
                <th>Qty</th>
                <th scope="col">Harga</th>
                <th>Jumlah</th>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
@push('script')
    <script>
        $(document).ready( function () {
            $('#table-transaksi').DataTable();
            
        } );
        function currency(number){
          return new Intl.NumberFormat('id').format(number);
        }
            function detailModal(id){
                let isi = '';
                $.ajax({
                    method:"GET",
                    url:"/admin/detail-transaksi/"+id,
                    success:function(res){
                        console.log(res.data[0].kode_barang);
                        let data = res.data;
                        let no = 1;
                        if(res.code == 200){
                            for(let i=0;i<res.data.length;i++){
                                isi+=`<tr>
                                        <td>${no++}</td>
                                        <td>${data[i].kode_barang}</td>
                                        <td>${data[i].nama_barang}</td>
                                        <td>${data[i].qty}</td>
                                        <td>Rp ${currency(data[i].harga)}</td>
                                        <td>Rp ${currency(data[i].harga * data[i].qty)}</td>
                                      </tr>;`
                            }
                            isi+=`<tr>
                                    <td colspan="5">Total Keseluruhan</td>
                                    <td>Rp ${currency(res.total)}</td>
                                </tr>`
                            $("#myModal").modal('show');
                            $("#myModal table tbody").html(isi);
                        }
                    }
                })
            }
    </script>
@endpush