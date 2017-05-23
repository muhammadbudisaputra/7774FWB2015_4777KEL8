@extends('home')
@section('container')
<div class="panel panel-warning">
<div class="panel-heading">
<strong> <a href="{{ url('penumpang') }}"><i style="color: #8a6d3b" class="fa text-default fa-chevron-left"></i></a>Detail Data penumpang</strong>
</div>
	<table class="table">
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td>{{ $penumpang->penumpang->nama }}</td>
		</tr>
		<tr>
			<td>Golongan</td>
			<td>:</td>
			<td>{{ $penumpang->penumpang->golongan }}</td>
		</tr>
		<tr>
			<td>No Telepon</td>
			<td>:</td>
			<td>{{ $penumpang->penumpang->no_telepon }}</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td>{{ $penumpang->penumpang->alamat }}</td>
		</tr>
		<tr>
			<td>Tujuan</td>
			<td>:</td>
			<td>{{ $penumpang->tujuan->nama_tujuan }}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Dibuat Tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$penumpang->created_at}}</td>
		</tr>
	</table>
</div>
@stop