<!--Vista reservada para el menu principal-->



@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-light bg-dark">Gestor de Nómina Cos Supervisor</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2>Bienvenido</h2>
                    </br>

                    <p>Espacio reservado menu principal</p>

                    
                    </br>
                    <a href="{{ action('PersonalController@index') }}" class="btn btn-danger"> Colaboradores</a>
                    <a href="{{ action('NominaController@index') }}"  class="btn btn-danger"> Nómina</a>




                </div>
            </div>
        </div>
    </div>
</div>
@endsection