@extends('home')
@section('container')
<div class="panel panel-warning">
<div class="panel-heading">
<strong> <a href="{{ url('kapal') }}"><i style="color: #8a6d3b" class="fa text-default fa-chevron-left"></i></a>DETAIL DATA KAPAL</strong>
</div>
	<table class="table">
		<tr>
			<td>NAMA KAPAL</td>
			<td>:</td>
			<td>{{ $kapal->nama_kapal }}</td>
		</tr>
		<tr>
			<td>JENIS KAPAL</td>
			<td>:</td>
			<td>{{ $kapal->jenis_kapal }}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Dibuat Tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$kapal->created_at}}</td>
		</tr>
	</table>
</div>
@stop