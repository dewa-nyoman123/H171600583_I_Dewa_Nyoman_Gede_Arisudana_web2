@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
			<div class="card-header text-center bg-info"  >Pengumuman</div>
                <div class="card-body">
                <a href="{!! route('pengumuman.create')!!}" class="btn btn-primary btn-outline-danger">{{ __('Tambah Data')}}</a>
                <div class="col text-center">
                <table class="table table-bordered">
                    <thead class ="bg-success">
					 <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Judul</th>
                                <th scope="col">isi</th>
                                <th scope="col">User_id</th>
                                <th scope="col">Create</th>
                                <th scope="col">Aksi</th>
                            </tr>
                    </thead>
                    <tbody>
		
		@foreach($Pengumuman as $item)
		<tr>
			<td>{!! $item->id !!}</td>
			<td>{!! $item->Judul !!}</td>
			<td>{!! $item->isi !!}</td>
			<td>{!! $item->Users_id !!}</td>
			<td>{!! $item->created_at->format('d/m/Y H:i:s') !!}</td>
			<td>
                            <a href ="index.php?p=tang" button class="btn btn-danger" type="button"> Hapus </button></a> 
                            <a href="{!! route('pengumuman.show',[$item-> id]) !!}" button class="btn btn-success">Lihat</a>
                        </td>
		</tr>
	
		@endforeach
		
		</table>
		</div>

		@endsection