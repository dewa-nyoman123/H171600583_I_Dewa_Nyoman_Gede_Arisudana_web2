@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
			<a href="{!! route('artikel.create')!!}" class="btn btn-primary">{{('Tambah Data')}}</a>
                <div class="col text-center">
                <table class="table table-bordered">
                    <thead class ="bg-success">
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">judul</th>
                                <th scope="col">isi</th>
                                <th scope="col">Kategori_Artikel_id</th>
                                <th scope="col">User_id</th>
                                <th scope="col">Create</th>
                                <th scope="col">Update</th>
                                <th scope="col">Aksi</th>
                            </tr>
                    </thead>
                    <tbody>
		
		@foreach($artikel as $item)
		<tr>
			<td>{!! $item->id !!}</td>
			<td>{!! $item->judul !!}</td>
			<td>{!! $item->isi !!}</td>
            <td>{!! $item->kategori_artikel_id !!}</td>
			<td>{!! $item->users_id !!}</td>
			<td>{!! $item->created_at->format('d/m/Y H:i:s') !!}</td>
            <td>{!! $item->updated_at->format('d/m/Y H:i:s') !!}</td>
			<td>
                 <a href="{!! route('artikel.show',[$item-> id]) !!}" button class="btn btn-success">Lihat</a>
				 <a href="{!! route('artikel.edit',[$item-> id]) !!}" button class="btn btn-warning">edit</a>
                 {!! Form::open(['route' => ['artikel.destroy', $item->id],'method' => 'delete']) !!}

                {!! Form::submit('Hapus', ['class'=>'btn  btn-sm btn-danger','onclick'=>"return confirm('Apakah Anda yakin menghapus data ini ?')"]); !!}
                {!! Form::close() !!}

				
            </td>
		</tr>
	
		@endforeach
		
		</table>
		</div>

		@endsection