<!--Vista reservada para el menu principal-->


@extends('PlantillaLinks')
@extends('layouts.app')
@section('content')
@section('links')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-light bg-dark">Crear un rol</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{route('role.store')}}" method="POST">
                        @csrf
                        <div class="container">
                            <form>
                                <div class="form-group">
                                  <label for="name">Nombre del nuevo rol</label>
                                  <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp" placeholder="Ej. Asistente de nómina">
                                  <small id="nameHelp" class="form-text text-muted">Colocar el cargo al cual se le asignarán permisos</small>
                                </div>
                                <div class="form-group">
                                    <label for="slug">Slug</label>
                                    <input type="text" class="form-control" id="slug" name="slug" aria-describedby="slugHelp" placeholder="Ej. secretaria, coordinador, soporte">
                                    <small id="nameHelp" class="form-text text-muted">Colocar una palabra corta que describa el cargo</small>
                                </div>
                                <div class="form-group">
                                    <label for="description">Descripción</label>
                                    <input type="text" class="form-control" id="description" name="description" aria-describedby="descriptionHelp" placeholder="Ej. con permisos para...">
                                    <small id="descriptionHelp" class="form-text text-muted">Colocar los aspectos que diferencian a este de otros roles</small>
                                </div>
                                
                                <p>Acceso Total
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="full-access" id="full-accessyes" value="yes">
                                        <label class="form-check-label" for="full-accessyes">Si</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="full-access" id="full-accessno" value="no" checked>
                                        <label class="form-check-label" for="full-accessno">No</label>
                                    </div>
                                </p>
                                
                                <p>Permisos a asignar
                                    @foreach ($permissions as $permission)
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="permission_{{$permission->id}}" value="{{$permission->id}}" name="permission[]">
                                            <label class="form-check-label" for="permission_{{$permission->id}}">{{$permission->id}} - {{$permission->name}}</label>
                                        </div>    
                                    @endforeach
                                </p>

                                <button type="submit" class="btn btn-outline-secondary">Guardar</button>
                              </form>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection