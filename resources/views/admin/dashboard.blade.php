@extends('appAdmin')
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Persianas</h1>
@stop

@section('content')
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createGraduateParty">
        Crear nueva persiana
    </button>
@stop

@section('css')
    <style>
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
