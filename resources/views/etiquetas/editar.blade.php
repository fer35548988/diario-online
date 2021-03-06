@extends('plantilla.principal')

@section('titulo')
  Editar Etiqueta
@endsection

@section('contenido')

  <div class="col-md-10 offset-md-1">

    @if ($errors->count() > 0)
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>
              {{$error}}
            </li>
          @endforeach
        </ul>
      </div>
    @endif

    <div class="card">

      <div class="card-header bg-primary">
        <h4 class="text-white text-center">Editar Etiqueta</h4>
      </div>

      <div class="card-body">

        {!! Form::open(['action' => ['ControladorEtiquetas@update', 'id'=>$etiqueta->id], 'method' => 'put']) !!}

        <div class="form-group">
          {!! Form::label('nombre', 'Nombre') !!}
          {!! Form::text('nombre', $etiqueta->nombre, ['class'=>'form-control', 'placeholder'=>'Ingrese el Nombre de su Etiqueta', 'required']) !!}
        </div>

        <div class="form-group">
          {!! Form::submit('Registrar', ['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close()!!}

      </div>
    </div>


  </div>

@endsection
