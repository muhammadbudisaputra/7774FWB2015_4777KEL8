@extends('home')
@section('container')
<div class="panel panel-warning">
<div class="panel-heading">
<strong> <a href="{{ url('tpt') }}"><i style="color: #8a6d3b" class="fa text-default fa-chevron-left"></i></a>DETAIL DATA TIKET</strong>
</div>
	<table class="table">
		<tr>
			<td>NAMA</td>
			<td>:</td>
			<td>{{ $tpt->penumpang->nama }}</td>
		</tr>
		<tr>
			<td>UMUR</td>
			<td>:</td>
			<td>{{ $tpt->penumpang->umur }}</td>
		</tr>
		<tr>
			<td>GOLONGAN</td>
			<td>:</td>
			<td>{{ $tpt->penumpang->golongan }}</td>
		</tr>
		<tr>
			<td>TUJUAN</td>
			<td>:</td>
			<td>{{ $tpt->tujuan->nama_tujuan }}</td>
		</tr>
		<tr>
			<td>PUKUL KEBERANGKATAN</td>
			<td>:</td>
			<td>{{ $tpt->tiket->jam_keberangkatan }}</td>
		</tr>
		<tr>
			<td>JAM KEBERANGKATAN</td>
			<td>:</td>
			<td>{{ $tpt->tiket->tanggal_keberangkatan }}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Dibuat Tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$tpt->created_at}}</td>
		</tr>
	</table>
</div>
@stop