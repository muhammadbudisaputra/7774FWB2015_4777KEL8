@extends('home')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>DATA AWAK KAPAL</strong>
		<a href="{{ url('awak/tambah') }}" class="btn btn-xs btn-primary pull-right"> <i class="fa fa-plus"></i>
		awak</a>

		<div class="clearfix"></div>
		</div>

		<table class="table">
			<thead>
				<tr>
				<th>No</th>
                <th>NAMA</th>
                <th>NAMA KAPAL</th>
                <th>POSISI</th>
                <th>UMUR</th>
                <th>JENIS KELAMIN</th>
                <th>ALAMAT</th>
				</tr>
			</thead>
			<tbody>
				<?php $x=1;?>
				@foreach ($semuaAwak as $awak)
					<tr>
					<td>{{ $x++ }}</td>
            	<td>{{ $awak->nama or 'Kosong'}}</td>
            	<td>{{ $awak->kapal->nama_kapal or 'Kosong'}}</td>
            	<td>{{ $awak->bagian or 'Kosong'}}</td>
            	<td>{{ $awak->umur or 'Kosong'}}</td>
            	<td>{{ $awak->jenis_kelamin or 'kosong'}}</td>
            	<td>{{ $awak->alamat or 'kosong'}}</td>
            	<td></td>
					<td>
					<div class="btn-group" role="group">

			<a href="{{ url('awak/edit/'.$awak->id) }}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>

			<a href="{{ url('awak/'.$awak->id_awak) }}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>

			<a href="{{ url('awak/hapus/'.$awak->id) }}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>

			</div>
			</td>
			</tr>
			@endforeach
			</tbody>
			</table>
	</div>
@stop			