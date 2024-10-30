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
                            <h3>Halaman Supplier</h3>
                        </div>
                        <div class="card-body">
                        <form action="/supplier/{{ $supplier->id }}/update" method="post">
    @csrf 
    <div class="mb-3"> 
        <label for="" class="form-label">Nama supplier</label>
        <input 
            type="text"
            class="form-control"
            name="nama_supplier"
            value="{{ $supplier->nama_supplier }}"
            id=""
            aria-describedby="helpid"
            placeholder=""
        />
       
    </div>
    
      
    </div>
    <button class="btn btn-primary" type="submit">Update</button>
</form>
    </div>
   
        <a class="btn btn-warning"href="/supplier">Kembali</a>
   
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
    