@extends('layouts.app');
@section('content')
    <head>
        <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.js"></script>
    </head>
    <div class="container">
        <h1>Nuevo Proveedor</h1>
        @include ('providers.error')
        <center><h1>Nuevo Proveedor</h1></center>
        @include('providers.form',['provider'=>$provider,'url'=>'/providers/','method'=>'POST'])
    </div>
@endsection