@extends('layout')
@section('title','Home') 
@section('content') 


<div class="container">
    <div class="row justify-content-center" style="height:90vh; align-items: center;">
        <div class="col-12 col-md-8 mx-auto">
            <div class="card sombra">
                <div class="card-body">
                    <div class="row p-2">
                        <div class="text-center">
                            <i class="fas fa-users icon"></i>
                            <h4 class="center mb-3">Tabla Personas</h1>
                        </div>
                        <table class="table table-striped table-hover table-light">
                            <thead>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Edad</th>
                                <th>Correo</th>
                                <th>Nombre recurso</th>
                                <th>Precio</th>
                              
                            </thead>
                            <tbody>
                                @foreach ($personas as $persona)
                                <tr>
                                    <td>{{$persona->id}}</td>
                                    <td>{{$persona->Nombre}}</td>
                                    <td>{{$persona->Edad}}</td>
                                    <td>{{$persona->Correo}}</td>
                                    <td>{{$persona->recursos->nombre}}</td>
                                    <td>{{$persona->recursos->precio}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>