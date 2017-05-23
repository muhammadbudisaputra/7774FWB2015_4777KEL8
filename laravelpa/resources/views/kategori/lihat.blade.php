@extends('home')
@section('container')
<div class="panel panel-warning">
<div class="panel-heading">
<strong> <a href="{{ url('kategori') }}"><i style="color: #8a6d3b" class="fa text-default fa-chevron-left"></i></a>DETAIL DATA kategori</strong>
</div>
	<table class="table">
		<tr>
			<td>KELAS</td>
			<td>:</td>
			<td>{{ $kategori->class }}</td>
		</tr>
		<tr>
			<td>PELAYANAN</td>
			<td>:</td>
			<td>{{ $kategori->pelayanan }}</td>
		</tr>
		<tr>
			<td>HARGA</td>
			<td>:</td>
			<td>{{ $kategori->harga }}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Dibuat Tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$kategori->created_at}}</td>
		</tr>
	</table>
</div>
@stop