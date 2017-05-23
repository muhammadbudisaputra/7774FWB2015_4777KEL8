<div class="form-group">
<label class="col-sm-2 control-label" id="tanggal_keberangkatan">Tanggal keberangkatan</label>

<div class="col-sm-10">
{!! Form::text('tanggal_keberangkatan',null,['class'=>'form-control','id'=>'tanggal_keberangkatan','placeholder'=>"tanggal keberangkatan"]) !!}
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label" id="jam_keberangkatan">jam keberangkatan</label>

<div class="col-sm-10">
{!! Form::text('jam_keberangkatan',null,['class'=>'form-control','id'=>'jam_keberangkatan','placeholder'=>"jam keberangkatan"]) !!}
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label" id="tanggal_keberangkatan">kategori</label>

<div class="col-sm-10">
{!! Form::select('id_kategori',$kategori->listkategori(),null,['class'=>'form-control','id'=>'id_kategori']) !!}
</div>
</div>