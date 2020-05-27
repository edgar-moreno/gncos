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

                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="https://i.ibb.co/1ZX1MrT/prueba-Img3.png" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="https://i.ibb.co/BLbfB8v/prueba-Img1.png" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="https://i.ibb.co/zNh1PD3/prueba-Img2.png" class="d-block w-100" alt="...">
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                    </div>
                    </br>
                    <h3>Bienvenido</h3>
                    </br>
                    <a href="{{ action('PersonalController@index') }}" class="btn btn-outline-secondary"> Ver usuarios</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection