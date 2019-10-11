@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-info" button class="btn btn-primary">Tambah Kategori Artikel</div>
          
                <div class="card-body">
                    {!! Form::model($KategoriArtikel, ['route' => ['KategoriArtikel.update', $KategoriArtikel->id],'method'=>'patch']) !!}
                        @include('Kategori_Artikel.form')
                        {!! Form::close() !!}
                </div>
            </div>
        </div>
     </div>
@endsection