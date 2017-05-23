@extends('home')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Data kategori</strong>
		<a href="{{ url('kategori/tambah') }}" class="btn btn-xs btn-primary pull-right"> <i class="fa fa-plus"></i>
		kategori</a>

		<div class="clearfix"></div>
		</div>

		<table class="table">
			<thead>
				<tr>
				<th>No</th>
                <th>KELAS</th>
                <th>PELAYANAN</th>
                <th>HARGA</th>
                </tr>
			</thead>
			<tbody>

				<?php $x=1;?>
				@foreach ($semuakategori as $kategori)
				<tr>
					<td>{{ $x++ }}</td>
            		<td>{{ $kategori->class or 'Kosong'}}</td>
            		<td>{{ $kategori->pelayanan or 'Kosong'}}</td>
            		<td>{{ $kategori->harga or 'Kosong'}}</td>
            		<td></td>
					<td>
					<div class="btn-group" role="group">

			<a href="{{ url('kategori/edit/'.$kategori->id) }}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>

			<a href="{{ url('kategori/'.$kategori->id_kategori) }}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>

			<a href="{{ url('kategori/hapus/'.$kategori->id) }}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>

			</div>
			</td>
			</tr>
			@endforeach
			</tbody>
			</table>
	</div>
@stop			