<!--Vista reservada para el menu principal-->


@extends('PlantillaLinks')
@extends('layouts.app')
@section('content')
@section('links')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-light bg-dark">Modificar un rol</div>

                <div class="card-body">
                    
                    @include('custom.message')

                    <form action="{{route('role.update', $role->id)}}" 
                     method="POST">
                        @csrf
                        @method('PUT')
                        <div class="container">
                            <form>
                                <div class="form-group">
                                    <label for="name">
                                        Nombre del nuevo rol
                                    </label>
                                    <input type="text" 
                                    class="form-control" 
                                    id="name" 
                                    name="name" 
                                    aria-describedby="nameHelp" 
                                    placeholder="Ej. Asistente de nómina"
                                    value="{{old('name', $role->name)}}">
                                    <small id="nameHelp" 
                                    class="form-text text-muted">
                                        Colocar el cargo al cual se le asignarán 
                                        permisos
                                    </small>
                                </div>
                                <div class="form-group">
                                    <label for="slug">
                                        Descripción corta
                                    </label>
                                    <input type="text" 
                                    class="form-control" 
                                    id="slug" name="slug" 
                                    aria-describedby="slugHelp" 
                                    placeholder=
                                    "Ej. secretaria, coordinador, soporte"
                                    value="{{old('slug', $role->slug)}}">
                                    <small id="nameHelp" 
                                    class="form-text text-muted">
                                        Colocar una palabra corta que describa 
                                        el cargo
                                    </small>
                                </div>
                                <div class="form-group">
                                    <label for="description">
                                        Descripción larga
                                    </label>
                                    <input type="text" 
                                    class="form-control" 
                                    id="description" 
                                    name="description" 
                                    aria-describedby="descriptionHelp" 
                                    placeholder="Ej. con permisos para..."
                                    value="{{old('description', $role->description)}}">
                                    <small id="descriptionHelp" 
                                    class="form-text text-muted">
                                        Colocar los aspectos que diferencian 
                                        a este de otros roles
                                    </small>
                                </div>
                                
                                <p>Acceso Total
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" 
                                        type="radio" 
                                        name="full-access" 
                                        id="full-accessyes" 
                                        value="yes"

                                        @if ($role['full-access']=="yes")
                                            checked
                                        @elseif (old('full-access')=="yes")
                                            checked
                                        @endif>
                                        <label class="form-check-label" 
                                        for="full-accessyes">
                                            Si
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" 
                                        type="radio" 
                                        name="full-access" 
                                        id="full-accessno" 
                                        value="no"

                                        @if ($role['full-access']=="no")
                                            checked
                                        @elseif (old('full-access')=="no")
                                            checked
                                        @endif>
                                        <label class="form-check-label" 
                                        for="full-accessno">
                                            No
                                        </label>
                                    </div>
                                </p>
                                
                                <p>Permisos a asignar
                                    @foreach ($permissions as $permission)

                                        <div class="form-group form-check">
                                            <input type="checkbox" 
                                            class="form-check-input" 
                                            id="permission_{{$permission->id}}" 
                                            value="{{$permission->id}}" 
                                            name="permission[]"

                                            @if (is_array(old('permission')) 
                                            && in_array("$permission->id",
                                            old('permission')))
                                            checked
                                            @elseif (is_array($permission_role) 
                                            && in_array("$permission->id",
                                            $permission_role))
                                            checked
                                            @endif>
                                            <label class="form-check-label" 
                                            for="permission_{{$permission->id}}">
                                                {{$permission->id}} 
                                                - {{$permission->name}}
                                            </label>
                                        </div>

                                    @endforeach
                                </p>

                                <a class="btn btn-outline-secondary"
                                 href="{{route('role.index')}}">
                                    Cancelar
                                </a>
                                <button type="submit" 
                                class="btn btn-outline-dark">
                                    Guardar
                                </button>
                              </form>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection