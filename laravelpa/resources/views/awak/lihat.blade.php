@extends('home')
@section('container')
<div class="panel panel-warning">
<div class="panel-heading">
<strong> <a href="{{ url('awak') }}"><i style="color: #8a6d3b" class="fa text-default fa-chevron-left"></i></a>Detail Data Awak</strong>
</div>
	<table class="table">
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td>{{ $awak->nama }}</td>
		</tr>
		<tr>
			<td>Nama Kapal</td>
			<td>:</td>
			<td>{{ $awak->kapal->nama_kapal }}</td>
		</tr>
		<tr>
			<td>Jenis Kapal</td>
			<td>:</td>
			<td>{{ $awak->kapal->jenis_kapal }}</td>
		</tr>
		<tr>
			<td>Usia</td>
			<td>:</td>
			<td>{{ $awak->umur }}</td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td>{{ $awak->jenis_kelamin }}</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td>{{ $awak->alamat }}</td>
		</tr>
		<tr>
			<td>Posisi</td>
			<td>:</td>
			<td>{{ $awak->bagian }}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Dibuat Tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$awak->created_at}}</td>
		</tr>
	</table>
</div>
@stop