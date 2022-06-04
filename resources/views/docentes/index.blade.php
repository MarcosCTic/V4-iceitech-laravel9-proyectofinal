@extends('layouts.panel')

@section('content')
        <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Docentes</h3>
                </div>
                <div class="col text-right">
                  <a href="{{url('/docentes/create')}}" class="btn btn-sm btn-primary">Nuevo Docente</a>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Nombres</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Cedula identidad</th>
                    <th scope="col">Celular</th>
                    <th scope="col">Correo Electronico</th>
                    <th scope="col">Opciones</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($data as $docentes)
                  <tr>
                    <th scope="row">
                      {{$docentes->nombres}}
                    </th>
                    <td>
                    {{$docentes->apellidos}}
                    </td>
                    <td>
                    {{$docentes->ci}}
                    </td>
                    <td>
                    {{$docentes->celular}}
                    </td>
                    <td>
                    {{$docentes->correo}}
                    </td>
                    <td>
                    <form action="{{url('/docentes/'.$docentes->id )}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="{{url('/docentes/'.$docentes->id.'/edit')}}" class="btn btn-sm btn-primary">Editar</a>
                        <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                      </form>
                      
                      
                    </td>
                  </tr>
                  @endforeach
                                 
                </tbody>
              </table>
            </div>
          </div>

 

@endsection