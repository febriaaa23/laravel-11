@extends('layouts.master');
@section('title','barang_masuk');
@section('content');

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                          <h3>Halaman Data Barang Masuk</h3>
                         <br>
                        </div>
                        <div class="card-body">

                          <div class="container-fluid">
                            <a class="btn btn-outline-primary" btn href="/barang_masuk">Kembali</a>
                            <br><br>
                            <form action="/barang_masuk/simpan" method="post">
                              <select class="form-control" name="id_barang" id="id_barang">
                                @foreach ($barang as $barang)
                                <option value="{{$barang-.id}}">{{$barang->nama_barang}}</option>
                                @endforeach
                              </select>
                          </div>

                          <div class="mb-3">
                            <label for="" class="form-label">ID Supplier</label>
                            <select class="form-controll" name="id_supplier" id="id_supplier">
                              @foreach ($supplier as $supplier)
                              <option value="{{$supplier->id}}">{{$supplier->nama_supplier}}</option>
                              @endforeach
                            </select>
                          </div>

                          <div class="mb-3">
                            <label for="" class="form-label">Jumlah</label>
                            <input 
                                type="number"
                                class="form-control"
                                name="jumlah"
                                id="jumlah"
                                value="{{old('jumlah')}}"
                                aria-describedby="helpid"
                                placeholder=""
                                />
                          </div>
                          @error('jumlah')
                          <div class="alert alert-danger mt-2">
                            {{$message}}
                          </div>
                          @enderror


                          
                          <button class="btn btn-outline-succes" type="submit">Kirim</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>

                           