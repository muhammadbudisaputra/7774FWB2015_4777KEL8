@extends('home')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Seluruh data penumpang</strong>
		<a href="{{ url('penumpang/tambah') }}" class="btn btn-xs btn-primary pull-right"> <i class="fa fa-plus"></i>
		penumpang</a>

		<div class="clearfix"></div>
		</div>

		<table class="table">
			<thead>
				<tr>
				<th>No</th>
                <th>Nama</th>
                <th>Golongan</th>
                <th>No Telpon</th>
                <th>Alamat</th>
                <th>Tujuan</th>
                <th></th>
                </tr>
			</thead>
			<tbody>

				<?php $x=1;?>

				@foreach ($data as $penumpang)
					<tr>
					<td>{{ $x++ }}</td>
            	<td>{{ $penumpang->penumpang->nama or 'Kosong'}}</td>
            	<td>{{ $penumpang->penumpang->golongan or 'Kosong'}}</td>
            	<td>{{ $penumpang->penumpang->no_telepon or 'kosong'}}</td>
            	<td>{{ $penumpang->penumpang->alamat or 'Kosong'}}</td>
            	<td>{{ $penumpang->tujuan->nama_tujuan or 'kosong'}}</td>
            	<td></td>
					<td>
					<div class="btn-group" role="group">

			<a href="{{ url('penumpang/edit/'.$penumpang->id) }}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>

			<a href="{{ url('penumpang/'.$penumpang->id_penumpang) }}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>

			<a href="{{ url('penumpang/hapus/'.$penumpang->id) }}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>

			</div>
			</td>
			</tr>
			@endforeach
			</tbody>
			</table>
	</div>
@stop			