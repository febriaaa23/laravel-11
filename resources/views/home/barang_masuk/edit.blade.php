@extends('layouts.master');
@section('title','barang_masuk');
@section('content');

        <div class="content-wrapper">
            <section class="content">
                <div class="containt-fluid">
                    <div class="row">
                        <!-- card kiri -->
                        <div class="col-md-3 mt-5">
                            <div class="card h-100">
                                <img src="/stroge/product/{{ $barang_masuk->barang->gambar }}" class="card-img-top img-fluid" alt="...">
                                 </div>
                                  </div>
                                  <!-- card kanan --> 
                                  <div class="cil-lg-4 mt-5">
                                  <div class="card">
                                   <div class="card-body">
                                     <h5 class="card-title fs-75">{{ $barang_masuk->barang->gambar }}</h5>

                                      <br>
                                     <hr>

                                  {{-- ganti sesuai database $barang_masuk->barang->harga_beli --}}
                                  <p class="card_text">Rp. {{ number_format->($barang_masuk->barang->harga_beli) }}</p>

                                 {{-- ganti sesuai database $barang_masuk->created_at format nya ikuti --}}
                                 <p class="card_text">Rp. {{ number_format->$barang_masuk->created_at->format('d-m-Y H:1')}}</p>
                                  <hr>

                                  {{-- ganti jumlah sesuai database --}}
                                 <P class="card-text"><small class="text-body-secondary">Jumlah : {{ $barang_masuk->jumlah}}</small></p>
                                </div>
                                 </div>
                                </div>

                                    {{-- ganti href sesuai web.php barangmasuk --}}
                                  <a href="/barangmasuk" class="btn btn-warning">Kembali</a>
                             </div>
                         </div>
                      </div>
                 </div>
            </div>
        </section>
    </div>
 @endsection
 