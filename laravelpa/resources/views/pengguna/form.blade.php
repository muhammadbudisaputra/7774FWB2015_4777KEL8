<div class="form-group">
<label class="col-sm-2 control-label" id="username">username</label>

<div class="col-sm-10">
{!! Form::text('username',null,['class'=>'form-control','id'=>'username','placeholder'=>"username"]) !!}
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label" id="password">password</label>
<div class="col-sm-10">
{!! Form::password('password',null,['class'=>'form-control','id'=>'password','placeholder'=>"password"]) !!}
</div>
</div>