@extends('home')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Seluruh data kapten</strong>
		<a href="{{ url('kapten/tambah') }}" class="btn btn-xs btn-primary pull-right"> <i class="fa fa-plus"></i>
		kapten</a>

		<div class="clearfix"></div>
		</div>

		<table class="table">
			<thead>
				<tr>
				<th>No</th>
                <th>NAMA</th>
                <th>KAPTEN KAPAL</th>
                <th>Usia</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
				</tr>
			</thead>
			<tbody>

				<?php $x=1;?>

				@foreach ($semuaKapten as $kapten)
					<tr>
					<td>{{ $x++ }}</td>
            	<td>{{ $kapten->nama_kapten or 'Kosong'}}</td>
            	<td>{{ $kapten->kapal->nama_kapal or 'Kosong'}}</td>
            	<td>{{ $kapten->umur or 'Kosong'}}</td>
            	<td>{{ $kapten->jenis_kelamin or 'kosong'}}</td>
            	<td>{{ $kapten->alamat or 'kosong'}}</td>
            	<td></td>
					<td>
					<div class="btn-group" role="group">

			<a href="{{ url('kapten/edit/'.$kapten->id) }}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>

			<a href="{{ url('kapten/'.$kapten->id_kapten) }}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>

			<a href="{{ url('kapten/hapus/'.$kapten->id) }}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>

			</div>
			</td>
			</tr>
			@endforeach
			</tbody>
			</table>
	</div>
@stop			