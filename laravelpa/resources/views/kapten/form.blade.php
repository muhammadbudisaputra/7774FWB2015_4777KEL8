<div class="form-group">
<label class="col-sm-2 control-label" id="nama">Nama</label>

<div class="col-sm-10">
{!! Form::text('nama_kapten',null,['class'=>'form-control','id'=>'nama_kapten','placeholder'=>"Nama Kapten"]) !!}
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label" id="nip">nip</label>
<div class="col-sm-10">
{!! Form::text('jenis_kelamin',null,['class'=>'form-control','id'=>'jenis_kelamin','placeholder'=>"jenis Kelamin"]) !!}
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label" id="alamat">Alamat</label>
<div class="col-sm-10">
{!! Form::text('alamat',null,['class'=>'form-control','id'=>'alamat','placeholder'=>"Alamat"]) !!}
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Umur</label>
<div class="col-sm-10">
{!! Form::text('umur',null,['class'=>'form-control','placeholder'=>"Umur"]) !!}
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Password</label>
<div class="col-sm-10">
{!! Form::select('id_kapal',$kapal->lists('nama_kapal','id_kapal'),null,['class'=>'form-control','id'=>'id_kapten','placeholder'=>"Id Kapal"]) !!}
</div>
</div>