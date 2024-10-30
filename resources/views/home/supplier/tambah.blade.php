@extends('layouts.master');
@section('title','user');
@section('content')
                <div class="content-wrapper">
                    <section class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3>Halaman Tambah Data supplier</h3>
                                            <a class="btn btn-warning"href="/user">Kembali</a>
                                        </div>
                                            <div class="card-body">
                                        <form action="/supplier/simpan" method="post">
                                            @csrf 
                                            <div class="mb-3">
                                                <label for="" class="form-label">Nama supplier</label>
                                                <input 
                                                    type="text"
                                                    class="form-control"
                                                    name="nama_supplier"
                                                    id=""
                                                    aria-describedby="help"
                                                    placeholder=""
                                                />
                                            
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="form-label">alamat </label>
                                                <input 
                                                    type="text"
                                                    class="form-control"
                                                    name="alamat"
                                                    id=""
                                                    aria-describedby="help"
                                                    placeholder=""
                                                />
                                            
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="form-label">notlp </label>
                                                <input 
                                                    type="number"
                                                    class="form-control"
                                                    name="no_tlp"
                                                    id=""
                                                    aria-describedby="help"
                                                    placeholder=""
                                                />
                                            
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