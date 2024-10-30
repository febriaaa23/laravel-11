@extends('layouts.master');
@section('title','barang');
@section('content');

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                          <h3>Halaman Data Data Barang</h3>
                          <a class="btn btn-warning" href="/barang">Kembali</a>
                         </div>
                         <div class="card-body">
                              <form action="/barang/simpan" method="post" enctype="multipart/form-data">
                                @csrf 
                                 <div class="mb-3">
                                   <label for="" class="form-label">Gambar</label>
                                   <input 
                                        type="file"
                                        class="form-control"
                                        name="gambar"
                                        id=""
                                        aria-describedby="helpid"
                                        placeholder=""
                                  />
                                    <!-- error mesagge untuk gambar -->
                                    @error('gambar')
                                    <div class="alert alert-denger mt-2">
                                          {{ $message }}
                                      </div>
                                    @enderror
                                   </div>
                                   <div class="mb-3">
                                      <label for="" class="form-label">Nama barang</label>
                                      <input 
                                            type="text"
                                            class="form-control"
                                            name="nama_barang"
                                            id=""
                                            value="{{ old('nama_barang') }}"
                                            aria-describedby="helpid"
                                            placeholder=""
                                        />
                                            <!-- error message untuk nama_barang --> 
                                            @error('nama_barang')
                                            <div class="alert alert-danger mt-2">
                                                  {{ $message }}
                                             </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form_label">ID Jenis</label>
                                        <select name="id_jenis" id="" class="form-control">
                                            <option value="">Pilih Jenis</option>
                                            @foreach($jenis as $jenis)
                                            <option value="{{ $jenis->id }}">{{ $jenis->nama_jenis }}</option>
                                            @endforech
                                        </select>
                                        <!-- error message untuk jenis -->
                                        @error('id_jenis')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                            <div class="mb-3">
                                                <label for="" class="form-label">Harga Beli</label>
                                                <input 
                                                    type="text"
                                                    class="form-control"
                                                    name="harga_beli"
                                                    id=""
                                                    value="{{ old('harga_beli') }}"
                                                    aria-describedby="helpid"
                                                    placeholder=""
                                              />
                                                <!-- error message untuk harga_beli -->
                                                @error('harga_beli')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                            </div>
                                          @enderror
                                        </div>
                                        <div class="mb-3">
                                                <label for="" class="form-label">Harga Jual</label>
                                                <input 
                                                    type="text"
                                                    class="form-control"
                                                    name="harga_jual"
                                                    id=""
                                                    value="{{ old('harga_jual') }}"
                                                    aria-describedby="helpid"
                                                    placeholder=""
                                                />
                                                <!-- error message untuk harga_jual -->
                                                @error('harga_jual')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                 </div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="form-label">Stok</label>
                                                <input 
                                                    type="text"
                                                    class="form-control"
                                                    name="stok"
                                                    id=""
                                                    value="{{ old('stok') }}"
                                                    aria-describedby="helpid"
                                                    placeholder=""
                                                 />
                                                  <!-- error message untuk stok -->
                                                  @error('stok')
                                                  <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                  </div>
                                             </div>
                                             <button class="btn btn-primary" type="submit">Simpan</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>