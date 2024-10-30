@extends('layouts.master');
@section('title','user');
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="containt-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Edit Data Jenis</h3>
                        </div>
                        <div class="card-body">
                        <form action="/jenis/{{ $jenis->id }}/update" method="post">
    @csrf 
    <div class="mb-3"> 
        <label for="" class="form-label">Nama Jenis</label>
        <input 
            type="text"
            class="form-control"
            name="nama_jenis"
            value="{{ $jenis->nama_jenis }}"
            id=""
            aria-describedby="helpid"
            placeholder=""
        />
       
    </div>
    
      
    </div>
    <button class="btn btn-primary" type="submit">Update</button>
</form>
    </div>
   
        <a class="btn btn-warning"href="/jenis">Kembali</a>
   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
    <div class="card-body">

    </section>
    @endsection
    