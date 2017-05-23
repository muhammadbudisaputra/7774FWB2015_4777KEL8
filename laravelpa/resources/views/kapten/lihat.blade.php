@extends('home')
@section('container')
<div class="panel panel-warning">
<div class="panel-heading">
<strong> <a href="{{ url('kapten') }}"><i style="color: #8a6d3b" class="fa text-default fa-chevron-left"></i></a>Detail Data kapten</strong>
</div>
	<table class="table">
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td>{{ $kapten->nama_kapten }}</td>
		</tr>
		<tr>
			<td>Kapten Kapal</td>
			<td>:</td>
			<td>{{ $kapten->kapal->nama_kapal }}</td>
		</tr>
		<tr>
			<td>jenis Kapal</td>
			<td>:</td>
			<td>{{ $kapten->kapal->jenis_kapal }}</td>
		</tr>
		<tr>
			<td>Usia</td>
			<td>:</td>
			<td>{{ $kapten->umur }}</td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td>{{ $kapten->jenis_kelamin }}</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td>{{ $kapten->alamat }}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Dibuat Tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$kapten->created_at}}</td>
		</tr>
	</table>
</div>
@stop