@extends('home')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Seluruh data tiket</strong>
		<a href="{{ url('tiket/tambah') }}" class="btn btn-xs btn-primary pull-right"> <i class="fa fa-plus"></i>
		tiket</a>

		<div class="clearfix"></div>
		</div>

		<table class="table">
			<thead>
				<tr>
				<th>No</th>
                <th>Nama</th>
                <th>Golongan</th>
                <th>Tujuan</th>
                <th>Pukul Keberangkatan</th>
                <th>Waktu Keberangkatan</th>
                <th></th>
                </tr>
			</thead>
			<tbody>

				<?php $x=1;?>

				@foreach ($data as $tiket)
					<tr>
					<td>{{ $x++ }}</td>
            	<td>{{ $tiket->penumpang->nama or 'Kosong'}}</td>
            	<td>{{ $tiket->penumpang->golongan or 'Kosong'}}</td>
            	<td>{{ $tiket->tujuan->nama_tujuan or 'kosong'}}</td>
            	<td>{{ $tiket->tiket->jam_keberangkatan or 'Kosong'}}</td>
            	<td>{{ $tiket->tiket->tanggal_keberangkatan or 'kosong'}}</td>
            	<td></td>
					<td>
					<div class="btn-group" role="group">

			<a href="{{ url('tiket/edit/'.$tiket->id) }}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>

			<a href="{{ url('tiket/'.$tiket->id_tiket) }}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>

			<a href="{{ url('tiket/hapus/'.$tiket->id) }}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>

			</div>
			</td>
			</tr>
			@endforeach
			</tbody>
			</table>
	</div>
@stop			