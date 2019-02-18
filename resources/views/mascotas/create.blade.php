@extends('layouts.default')
@section('titulo','Mascotas - Agregar Mascotas')
@section('subtitulo', 'Lista de mascotas')
@section('contenido')
    <form action="{{route('mascotas.store')}}" method="post">
    @csrf
        <label>Especie</label>
        <select class="form-control" name="especie"required>
            <option disable selected value="">Elige una especie</option>
            @foreach($especies as $especie)
            <option value="{{$especie->id}}">{{$especie->nombre}}</option>
             @endforeach
        </select>
        <br/><br/>
        <label>Nombre</label>
        <input class="form-control" required type="text" name="nombre" placeholder="Nombre de la mascota">
        <br/><br/>
        <label>Precio</label>
        <input required type="text" name="precio" placeholder="Precio de la mascota">
        <br/><br/>
        <label>Fecha de nacimiento</label>
        <input required type="date" name="nacimiento">
        <br/><br/>
        <button required type="submit">Crear nueva mascota</button>
    </form>
@endsection