@extends('layouts.master');
@section('title','barang_keluar');
@section('content');

        <div class="content-wrapper">
            <section class="content">
                <div class="containt-fluid">
                    <div class="row">
                        <!-- card kiri -->
                        <div class="col-md-3 mt-5">
                            <div class="card h-100">
                                <img src="/stroge/product/{{ $barang_keluar->barang->gambar }}" class="card-img-top img-fluid" alt="...">
                                 </div>
                                  </div>
                                  <!-- card kanan --> 
                                  <div class="cil-lg-4 mt-5">
                                  <div class="card">
                                   <div class="card-body">
                                     <h5 class="card-title fs-75">{{ $barang_keluar->barang->gambar }}</h5>

                                      <br>
                                     <hr>

                                  {{--ganti sesuai database $barang_keluar->barang->harga_beli --}}
                                  <p class="card_text">Rp. {{ number_format->($barang_keluar->barang->harga_beli) }}</p>

                                 {{--ganti sesuai database $barang_masuk->created_at format nya ikuti--}}
                                 <p class="card_text">Rp. {{ number_format->$barang_keluar->created_at->format('d-m-Y H:1')}}</p>
                                  <hr>

                                  {{--ganti jumlah sesuai database}}
                                 <P class="card-text"><small class="text-body-secondary">Jumlah : {{ $barang_keluar->jumlah}}</small></p>
                                </div>
                                 </div>
                                </div>

                                    {{--ganti href sesuai web.php barangkeluar--}}
                                  <a href="/barangkeluar" class="btn btn-warning">Kembali</a>
                             </div>
                         </div>
                      </div>
                 </div>
            </div>
        </section>
    </div>
 @endsection