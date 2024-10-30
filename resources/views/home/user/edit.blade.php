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
                            <h3>Halaman Edit Data Barang</h3>
                        </div>
                        <div class="card-body">
                        <form action="/user/{{ $user->id }}/update" method="post">
    @csrf 
    <div class="mb-3"> 
        <label for="" class="form-label">Nama User</label>
        <input 
            type="text"
            class="form-control"
            name="name"
            value="{{ $user->name }}"
            id=""
            aria-describedby="helpid"
            placeholder=""
        />
       
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Email</label>
        <input 
            type="email"
            class="form-control"
            name="email"
            id=""
            value="{{ $user->email }}"
            aria-describedby="helpid"
            placeholder=""
        />
    <!-- <div class="mb-3">
        <label for="" class="form-label">Password</label>
        <input 
            type="password"
            class="form-control"
            name="password"
            id=""
            value="{{ $user->password }}"
            aria-describedby="helpid"
            placeholder=""
        /> -->
      
    </div>
    <button class="btn btn-primary" type="submit">Update</button>
</form>
    </div>
   
        <a class="btn btn-warning"href="/user">Kembali</a>
   
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
    