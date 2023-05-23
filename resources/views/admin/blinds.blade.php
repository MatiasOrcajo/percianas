@extends('appAdmin')
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Persianas</h1>
@stop

@section('content')
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createBlind">
        Crear nueva persiana
    </button>

    <!-- Modal -->
    <div class="modal fade" id="createBlind" tabindex="-1" role="dialog" aria-labelledby="createBlindLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createBlindLabel">Crear Persiana</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="{{route('store.blind')}}">
                    @csrf
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="blindNameInput">Nombre Persiana:</label>
                            <input type="text" class="form-control" id="blindNameInput" name="name">
                            <small id="blindHelp" class="form-text text-muted">Nombre con el que lo va a ver el
                                cliente.</small>
                        </div>

                        <div class="form-group">
                            <label for="blindDescriptionInput">Descripción:</label>
                            <textarea class="form-control" id="blindDescriptionInput" name="description"></textarea>
                            {{--                            <small id="blindHelp" class="form-text text-muted">Nombre con el que lo va a ver el cliente.</small>--}}
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar cambios</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="row">
        @foreach($blinds as $blind)
            <div class="card mt-3" style="width: 18rem;">
                <img class="card-img-top" src="..." alt="Blind image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$blind->name}}</h5>
                    <p class="card-text">{{$blind->description}}</p>
                    <a href="{{route('show.blind', $blind->id)}}" class="btn btn-primary">Ver</a>
                </div>
            </div>
        @endforeach
    </div>
@stop

@section('css')
    <style>

        .blind-container{
            border: 1px solid;
        }

        /* unvisited link */
        a:link {
            color: white;
            text-decoration: none;
        }

        /* visited link */
        a:visited {
            color: white;
            text-decoration: none;
        }

        /* mouse over link */
        a:hover {
            color: black !important;
            text-decoration: none;
        }

        /* selected link */
        a:active {
            color: white;
            text-decoration: none;
        }
    </style>
@stop

@section('js')
@stop
