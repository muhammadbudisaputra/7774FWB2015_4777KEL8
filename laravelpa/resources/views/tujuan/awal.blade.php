@extends('home')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Seluruh data tujuan</strong>
		<a href="{{ url('tujuan/tambah') }}" class="btn btn-xs btn-primary pull-right"> <i class="fa fa-plus"></i>
		tujuan</a>

		<div class="clearfix"></div>
		</div>

		<table class="table">
			<thead>
				<tr>
				<th>No</th>
                <th>Nama</th>
                <th>Tujuan</th>
                <th>Pukul Keberangkatan</th>
                <th>Waktu Keberangkatan</th>
                <th></th>
                </tr>
			</thead>
			<tbody>

				<?php $x=1;?>

				@foreach ($data as $tujuan)
					<tr>
					<td>{{ $x++ }}</td>
            	<td>{{ $tujuan->penumpang->nama or 'Kosong'}}</td>
            	<td>{{ $tujuan->tujuan->nama_tujuan or 'kosong'}}</td>
            	<td>{{ $tujuan->tiket->jam_keberangkatan or 'Kosong'}}</td>
            	<td>{{ $tujuan->tiket->tanggal_keberangkatan or 'kosong'}}</td>
            	<td></td>
					<td>
					<div class="btn-group" role="group">

			<a href="{{ url('tujuan/edit/'.$tujuan->id) }}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>

			<a href="{{ url('tujuan/'.$tujuan->id_tujuan) }}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>

			<a href="{{ url('tujuan/hapus/'.$tujuan->id) }}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>

			</div>
			</td>
			</tr>
			@endforeach
			</tbody>
			</table>
	</div>
@stop			