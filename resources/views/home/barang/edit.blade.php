@extends('layouts.master');
@section('title','barang');
@section('content');

<div class="content-wrapper">
    <section class="content">
        <div class="containt-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">

                        </div>
                        <div class="card-body">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<div class="card-body">
<form action="/barang/{{ $barang->id }}/update" method="post" enctype="multipart/form-data">
    @csrf 
    <div class="mb-3"> 
        <label for="" class="form-label">Gambar</label>
        <input 
            type="text"
            class="form-control"
            name="gambar"
            id=""
            aria-describedby="helpid"
            placeholder=""
        />
        <!-- error message untuk gambar -->
         @error('gambar')
         <div class="alert alert-danger mt-2">
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
            value="{{ old('nama_barang', $barang->nama_barang) }}"
            aria-describedby="helpid"
            placeholder=""
        />
        <!-- error message untuk nama_barang -->
         @error('nama_barang')
        <div class="alert alert-danger mt-2">
            {{ $message }}
        </div>
    </div>
    @enderror
 