@extends('layouts.app')

@section('content')
    <h2 class="text-center">Lista Medicamentos</h2>

    <div style="text-align: center;" class="mb-3">
        <a href="{{ route('medicamentos.search') }}"><button class="btn btn-info"><i class="fas fa-search"></i></button></a>
        <div style="width: 40%; display: inline-block;">
            <a href="{{ route('medicamentos.create') }}"><button class="btn btn-primary btn-block">Nuevo</button></a>
        </div>
    </div>

    <div style="text-align: center;">
        <div style="width: 50%; display: inline-block;">
            <table class="table">
                <tr>
                    <th>Nombre</th>
                    <th>Cantidad</th>
                </tr>
                @foreach ($records as $item)
                    <tr>
                        <td><a class="btn btn-secondary" href="{{ route('medicamentos.show', ['medicamento' => $item->nombre]) }}">{{ $item->nombre }}</a></td>
                        <td>{{ $item->cantidad }}</td>
                    </tr>
                @endforeach
            </table>

            <div class="d-flex">
                <div class="mx-auto">
                    {{ $records->appends(Request::except('page'))->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
