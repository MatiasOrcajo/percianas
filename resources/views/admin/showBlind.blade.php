@extends('appAdmin')
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>{{$blind->name}}</h1>
@stop

@section('content')
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createBlind">
        Añadir foto
    </button>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createBlind">
        Añadir color disponible
    </button>

    <!-- Modal -->
    <div class="modal fade" id="createBlind" tabindex="-1" role="dialog" aria-labelledby="createBlindLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createBlindLabel">Añadir foto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="{{route('store.blind')}}">
                    @csrf
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="blindImageInput">Foto:</label>
                            <input accept="image/*" type="file" name="images[]" multiple id="blindImageInput" class="form-control">
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
{{--        @foreach($blinds as $blind)--}}
{{--            <div class="card mt-3" style="width: 18rem;">--}}
{{--                <img class="card-img-top" src="..." alt="Blind image cap">--}}
{{--                <div class="card-body">--}}
{{--                    <h5 class="card-title">{{$blind->name}}</h5>--}}
{{--                    <p class="card-text">{{$blind->description}}</p>--}}
{{--                    <a href="{{route('show.blind')}}" class="btn btn-primary">Ver</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        @endforeach--}}
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
