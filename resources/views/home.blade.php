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
                            <img src="https://st4.depositphotos.com/2041377/25399/v/1600/depositphotos_253994330-stock-illustration-contact-us-icons.jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="https://c8.alamy.com/comp/WE21J7/contact-us-call-center-vector-seamless-pattern-illustration-WE21J7.jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="https://media.istockphoto.com/vectors/contact-us-seamless-pattern-with-thin-line-icons-of-telephone-fax-vector-id899394070" class="d-block w-100" alt="...">
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