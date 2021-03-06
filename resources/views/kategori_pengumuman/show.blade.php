@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
             
<body>
<div class="form-group row">
<label for="email" class="col-md-4 col-form-label text-md-right">ID</label>
<label for="email" class="col-md-8 col-form-label text-md-left">{!! $kategoriPengumuman->id !!}</label>
		</div>

        <div class="form-group row">
<label for="email" class="col-md-4 col-form-label text-md-right">Nama</label>
<label for="email" class="col-md-8 col-form-label text-md-left">{!! $kategoriPengumuman->nama !!}</label>
		</div>

        <div class="form-group row">
<label for="email" class="col-md-4 col-form-label text-md-right">Users</label>
<label for="email" class="col-md-8 col-form-label text-md-left">{!! $kategoriPengumuman->users_id !!}</label>
		</div>

        <div class="form-group row">
<label for="email" class="col-md-4 col-form-label text-md-right">Create</label>
<label for="email" class="col-md-8 col-form-label text-md-left">{!! $kategoriPengumuman->created_at->format('d/m/y H:i:s')!!}</label>
		</div>

        <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <a href="{!! route('KategoriPengumuman.index')!!}" class="btn btn-primary">
                                Back
                            </a>
                        </div>
                    </div>

               </div> 
               </div>
               </div>    

		@endsection