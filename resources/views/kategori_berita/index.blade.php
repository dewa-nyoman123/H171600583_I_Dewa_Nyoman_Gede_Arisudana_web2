@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
			<div class="card-header">Kategori Berita</div>
                <div class="card-body">
             
<body>
<a href ="{!! route('KategoriBerita.create',) !!}" button class="btn btn-success" type="button"> Tambah </button></td></a>
		
		

			
			<table class="table table-bordered">
                    <thead class="bg-success">
                        <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nama</th>
                        <th scope="col">User_id</th>
                        <th scope="col">Create</th>
						<th scope="col">Update</th>
                        <th scope="col">Aksi</th>
				</tr>
					</thead>      
					<body >
		@foreach($kategoriBerita as $item)
		<tr>
			<td>{!! $item->id !!}</td>
			<td>{!! $item->nama !!}</td>
			<td>{!! $item->users_id !!}</td>
			<td>{!! $item->created_at->format('d/m/Y H:i:s') !!}</td>
			<td>{!! $item->updated_at->format('d/m/Y H:i:s') !!}</td>
			
			<td>
			<a href="{!! route('KategoriBerita.show',[$item-> id]) !!}" button class="btn btn-success">Lihat</a>
			
			<a href="{!! route('KategoriBerita.edit',[$item-> id]) !!}" button class="btn btn-warning">Edit</a>
			
			{!! Form::open(['route' => ['KategoriBerita.destroy', $item->id],'method' => 'delete']) !!}

                 {!! Form::submit('Hapus', ['class'=>'btn  btn-sm btn-danger','onclick'=>"return confirm('Apakah Anda yakin menghapus data ini ?')"]); !!}
                {!! Form::close() !!}
			</td>
			
		</tr>
	
		@endforeach
		
		</table>
		</div>

		@endsection