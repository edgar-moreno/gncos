<!--Vista reservada para el menu principal-->



@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-light bg-dark">Gestor de nómina cos</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Espacio reservado menu principal
                    <a href="{{ action('PersonalController@index') }}"> Usuarios</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection