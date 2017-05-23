@extends('home')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>DATA KAPAL</strong>
		<a href="{{ url('kapal/tambah') }}" class="btn btn-xs btn-primary pull-right"> <i class="fa fa-plus"></i>
		kapal</a>

		<div class="clearfix"></div>
		</div>

		<table class="table">
			<thead>
				<tr>
				<th>No</th>
                <th>NAMA KAPAL</th>
                <th>JENIS KAPAL</th>
                </tr>
			</thead>
			<tbody>

				<?php $x=1;?>
				@foreach ($semuakapal as $kapal)
				<tr>
					<td>{{ $x++ }}</td>
            		<td>{{ $kapal->nama_kapal or 'Kosong'}}</td>
            		<td>{{ $kapal->jenis_kapal or 'Kosong'}}</td>
            		<td></td>
					<td>
					<div class="btn-group" role="group">

			<a href="{{ url('kapal/edit/'.$kapal->id) }}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>

			<a href="{{ url('kapal/'.$kapal->id_kapal) }}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>

			<a href="{{ url('kapal/hapus/'.$kapal->id) }}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>

			</div>
			</td>
			</tr>
			@endforeach
			</tbody>
			</table>
	</div>
@stop			