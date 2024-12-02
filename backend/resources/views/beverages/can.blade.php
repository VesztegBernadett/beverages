@extends('layouts.main')
@php
    $titles = [
        'műanyag' => 'Műanyag palackos italok',
        'fém' => 'Fémdobozos italok',
        'üveg' => 'Üveges italok',
        'papír' => 'Papírdobozos italok',
    ]
@endphp

@section('title', $titles[request()->route('can')])
    
@section('content')
    <div class="row row-gap-4">
        @foreach ($beverages as $beverage)
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card h-100">
                    <div class="card-body h-100 d-flex flex-column">
                      <h5 class="card-title">{{ $beverage->name }}</h5>
                      <h6 class="card-subtitle mb-2 text-body-secondary flex-grow-1">{{ $beverage->type }}</h6>
                      <p class="card-text"><span class="badge bg-success">{{ $beverage->size }} l</span></p>
                      <a href="{{ route('beverages.show', ['id' => $beverage->id]) }}" class="btn btn-success">Megtekintés</a>
                    </div>
                  </div>
            </div>
        @endforeach
    </div>
@endsection