@extends('layouts.main')

@section('title', $beverage.Name)
    
@section('content')
    <table class="table table-responsive table-striped">
        <tr>
            <th>Típus</th>
            <td>{{ $beverage->type ?? 'Nincs megadva' }}</td>
        </tr>
        <tr>
            <th>Űrtartalom</th>
            <td>{{ $beverage->size }} l</td>
        </tr>
        <tr>
            <th>Csomagolás</th>
            <td>{{ $beverage->packaging_type }}</td>
        </tr>
    </table>
@endsection