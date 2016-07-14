@extends('layouts.admin')
@section('content')
@include('alerts.request')
<div class="row">


<div class="col-md-12">
    {!!Form::model($user,['route'=>['usuario.update',$user],'method'=>'PUT'])!!}

      @include('usuario.forms.usr')
      <div class="row">


      <div class="col-md-4 col-md-offset-3 col-xs-6">
  {!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
    {!!Form::close()!!}
      </div>
      <div class="col-md-1 col-xs-6">
        {!!Form::open(['route'=>['usuario.destroy',$user],'method'=>'DELETE'])!!}


          {!!Form::submit('Eliminar',['class'=>'btn btn-danger pull-right'])!!}
        {!!Form::close()!!}


        </div>
    </div>
    </div>

</div>





@endsection
