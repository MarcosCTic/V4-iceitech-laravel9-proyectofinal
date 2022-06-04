@extends('layouts.panel')

@section('content')

        <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Nuevo Docente</h3>
                </div>
                <div class="col text-right">
                  <a href="{{url('/docentes')}}" class="btn btn-sm btn-success">
                  <i class="fas fa-chevron-left"></i>    
                  Regresar</a>
                </div>
              </div>
            </div>
            <div class="card-body">

            @if ($errors->any())
                  @foreach ($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                      <i class="fas fa-exclamation-triangle"></i>
                      <strong>Por favor!!</strong>{{$error}}
                    </div>
                  @endforeach
                  
                @endif

                <form action="{{ url('/docentes/'.$docente->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nombres">Nombres</label>
                        <input type="text" name="nombres" class="form-control" value="{{ old('nombres',$docente->nombres) }}" required>
                    </div>
                    <div class="form-group">
                        <label for="apellidos">Apellidos</label>
                        <input type="text" name="apellidos" class="form-control" value="{{ old('apellidos',$docente->apellidos) }}" required>
                    </div>
                    <div class="form-group">
                        <label for="ci">Cedula de Identidad</label>
                        <input type="text" name="ci" class="form-control" value="{{ old('ci',$docente->ci) }}" required>
                    </div>
                    <div class="form-group">
                        <label for="celular">Numero de  Celular</label>
                        <input type="text" name="celular" class="form-control" value="{{ old('celular',$docente->celular) }}" required>
                    </div>
                    <div class="form-group">
                        <label for="correo">Correo Electronico</label>
                        <input type="text" name="correo" class="form-control" value="{{ old('correo',$docente->correo) }}" required>
                    </div>
                    <button type="submit" class="btn btn-sm btn-primary"> Guardar Docente</button>
                </form>

            </div>
          </div>

 

@endsection