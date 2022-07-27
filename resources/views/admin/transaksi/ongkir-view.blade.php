@extends('layouts.master-admin')
@section('section-header','Cek Ongkir')
@section('content-admin')

<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4>Lokasi Pengirim</h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                        <label>Provinsi</label>
                        <select name="provinsi" class="form-control" id="provinsi-send">
                            @foreach($provinsi as $item)
                            <option value="{{$item['province_id']}}">{{$item['province']}}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="">Kota</label>
                        <select name="kota" class="form-control" id="kota-send">
                            <option value="">Pilih Kota</option>                        
                        </select>
                    </div>
            </div>
        </div>
    </div>


    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4>Lokasi Penerima</h4>
            </div>
            <div class="card-body">
                <form action="">
                    
                    <div class="form-group">
                        <label>Provinsi</label>
                        <select name="provinsi" class="form-control" id="provinsi">
                            @foreach($provinsi as $item)
                            <option value="{{$item['province_id']}}">{{$item['province']}}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="">Kota</label>
                        <select name="kota" class="form-control" id="kota">
                            <option value="">Pilih Kota</option>                        
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Berat</label>
                        <div class="input-group">
                            <input type="text" name="berat" class="form-control" id="berat">
                            <div class="input-group-append">
                                <div class="input-group-text">Kg</div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">Kurir</label>
                        <select name="kurir" class="form-control" id="kurir">
                            <option value="">Pilih Kurir</option>
                            <option value="jne">JNE</option>
                            <option value="pos">POS</option>
                            <option value="tiki">Tiki</option>
                        </select>
                    </div>
                </form>
               

            </div> <!-- end card-body -->

        </div>
    </div>

</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Ongkir</h4>
            </div>
            <div class="card-body">
                <div id="ongkir-list">

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@push('script')
    <script>
        let destination;
        let origin;
        let kurir;
        let _token = $('meta[name="csrf-token"]').attr('content');

        function getKota(province_id){
            let elm = '';
            url = `/ongkir/${province_id}/city`;
           return $.ajax({
               method:'GET',
               url:url,
               success:function(res){
                console.log(res.rajaongkir.results);
                const listKota = res.rajaongkir.results;
                for(kota of listKota){
                    elm += `<option value="${kota.city_id}">${kota.type} ${kota.city_name}</option>`;
                }
               }
           }); 
        }

        async function elmKota(prov_id){
            let elm = '';
            const listKota = await getKota(prov_id);
            console.log(listKota.rajaongkir.results);
            for(kota of listKota.rajaongkir.results){
                    elm += `<option value="${kota.city_id}">${kota.type} ${kota.city_name}</option>`;
                }
            return elm; 
        }

        $('#provinsi-send').change(function(){
            const prov_id = $('#provinsi-send option:selected').val();
            const updateDom = elmKota(prov_id);
            updateDom.then(data=>$('#kota-send').html(data));
           
        });

       $('#provinsi').change(function(){
           const province_id = $('#provinsi option:selected').val();
           const updateDom = elmKota(province_id);
            updateDom.then(data=>$('#kota').html(data));
       });

       $('#kota-send').change(function(){
           origin = $('#kota-send option:selected').val(); 
       })

       $('#kota').change(function(){
           destination = $('#kota option:selected').val(); 
       })

       $('#kurir').change(function(){
                url = '/ongkir/harga';
               kurir = $('#kurir option:selected').val()
            let data = {
                origin,
                destination,
                kurir,
                berat:$("#berat").val()*1000,
                _token
            }
            $.ajax({
                method:'POST',
                url:url,
                data:data,
                dataType:'json',
                success:function(res){
                    console.log(res.rajaongkir.results);
                    const costs = res.rajaongkir.results[0];
                    let services = '';

                    for(const harga of costs.costs){
                        services += `
                            <tr>
                                <td> ${harga.service} </td>
                                <td> ${harga.description} </td>
                                <td> ${harga.cost[0].etd} hari </td>
                                <td> ${harga.cost[0].value} </td>
                            </tr>
                        `;
                    }
                    let table = `
                    <table class="table table-bordered" id="table-kurir"  style="font-size:13px">
                    <thead>
                        <tr>
                            <td>Layanan</td>
                            <td>Deskripsi</td>
                            <td>Estimasi Pengiriman</td>
                            <td>Harga</td>
                        </tr>
                    </thead>

                    <tbody>
                        ${services}
                    </tbody>
                </table>
                    `;
                    $("#ongkir-list").html(table);
                }
            });

       });


    </script>
@endpush