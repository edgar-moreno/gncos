<!--Vista reservada para el menu principal-->


@extends('PlantillaLinks')
@extends('layouts.app')
@section('content')
@section('links')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header text-light bg-dark">Lista de roles</div>

                <div class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="{{route('role.create')}}" class="btn btn-outline-secondary float-right" type="button">Crear nuevo rol</a>
                    </br>
                    </br>

                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Acceso total</th>
                            <th colspan="3"></th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $role)
                                <tr>
                                    <th scope="row">{{$role->id}}</th>
                                    <td>{{$role->name}}</td>
                                    <td>{{$role->slug}}</td>
                                    <td>{{$role->description}}</td>
                                    <td>{{$role['full-access']}}</td>   
                                    <td><a href="{{route('role.show',$role->id)}}" class="btn btn-outline-secondary" type="button">Mostrar</a></td>
                                    <td><a href="{{route('role.edit',$role->id)}}" class="btn btn-outline-dark" type="button">Editar</a></td>
                                    <td><a href="{{route('role.destroy',$role->id)}}" class="btn btn-outline-danger" type="button">Eliminar</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{$roles->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection