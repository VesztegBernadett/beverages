@extends('layouts.main')

@section('title', 'Üdítők')
    
@section('content')
    <div class="row row-gap-4 align-items-stretch">
        @foreach ($beverages as $beverage)
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card h-100">
                    <div class="card-body h-100 d-flex flex-column">
                      <h5 class="card-title">Name</h5>
                      <h6 class="card-subtitle mb-2 text-body-secondary flex-grow-1">Type</h6>
                      <p class="card-text"><span class="badge bg-success">Size l</span></p>
                      <a href="{{ route('beverages.show', ['id' => 'CHANGE ME']) }}" class="btn btn-success">Megtekintés</a>
                    </div>
                  </div>
            </div>
        @endforeach
    </div>
@endsection