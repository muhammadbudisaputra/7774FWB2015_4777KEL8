@extends('home')
@section('container')
<div class="panel panel-warning">
<div class="panel-heading">
<strong> <a href="{{ url('tujuan') }}"><i style="color: #8a6d3b" class="fa text-default fa-chevron-left"></i></a>Detail Data tujuan</strong>
</div>
	<table class="table">
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td>{{ $tujuan->penumpang->nama }}</td>
		</tr>
		<tr>
			<td>Tujuan</td>
			<td>:</td>
			<td>{{ $tujuan->tujuan->nama_tujuan }}</td>
		</tr>
		<tr>
			<td>Pukul Keberangkatan</td>
			<td>:</td>
			<td>{{ $tujuan->jam_keberangkatan }}</td>
		</tr>
		<tr>
			<td>Waktu Keberangkata</td>
			<td>:</td>
			<td>{{ $tujuan->tanggal_keberangkatan }}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Dibuat Tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$tujuan->created_at}}</td>
		</tr>
	</table>
</div>
@stop