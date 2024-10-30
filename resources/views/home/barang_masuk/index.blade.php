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
                                @if(session('success'))
                                <div class="alert alert-info">
                                    {{ session('success') }}
                                </div>
                                @endif
                                <h3>Halaman Data Barang Masuk</h3>
                                <a class="btn btn-primary" href="/barang/tambah">Tambah</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">No.</th>
                                                <th scope="col">Nama Barang</th>
                                                <th scope="col">Nama Supplier</th>
                                                <th scope="col">Jumlah</th>
                                                <th scope="col">Detail</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($barang_masuk as $barang_masuk)
                                            <tr class="">
                                                <td>{{ $barang->nama_barang }}</td>
                                                <td>{{ $barang->Supplier->nama_supplier }}</td>
                                                <td>{{ $barang->Jumlah }}</td>
                                                <td>{{ $barang->Detail }}</td>
                                                    <a class="btn btn-danger" href="/barang/{{ $barang->id }}/delete">Delete</a>
                                                </tr>
                                            @endforeach
                                   </tbody>
                             </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>