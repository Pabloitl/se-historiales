@extends('layouts.app')

@section('content')
    <h2 class="text-center">Alumno</h2>

    <div style="text-align: center;">
        <div style="width: 50%; display: inline-block;">
            <div class="form-group">
                <label for="No_Control">Numero de control:</label>
                <input readonly type="text" class="form-control" id="No_Control" name="No_Control" value="{{ $record['no_control'] ?? '' }}">
            </div>
            <div class="form-group">
                <label for="Nombre">Nombre:</label>
                <input readonly type="text" class="form-control" id="Nombre" name="Nombre" value="{{ $record['nombre'] ?? '' }}">
            </div>

            <div class="form-group">
                <label for="Sexo">Sexo:</label>
                <input readonly type="text" class="form-control" id="Sexo" name="Sexo" value="{{ $record['sexo'] ?? '' }}">
            </div>

            <div class="form-group">
                <label for="Carrera">Carrera:</label>
                <input readonly type="text" class="form-control" id="Carrera" name="Carrera" value="{{ $record['carrera'] ?? '' }}">
            </div>

            <div style="text-align: center;" class="mt-3">
                <div style="width: 40%; display: inline-block;">
                    <a class="btn btn-primary btn-block" href="{{ route('alumnos.edit', ['alumno' => $record['no_control']]) }}">Editar</a>
                </div>
            </div>
        </div>
    </div>
@endsection
