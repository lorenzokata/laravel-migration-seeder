@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="row cols g-3">

                @foreach ($vacation_packages as $item)
                <div class="card" style="width: 18rem;">
                    <div class="card-header">
                        {{ $item->title}}
                        Featured
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{ $item->travel_agency }}</li>
                        <li class="list-group-item">{{ $item->travelers }}</li>
                        <li class="list-group-item">{{ $item->location }}</li>
                        <li class="list-group-item">{{ $item->transportation }}</li>
                        <li class="list-group-item">{{ $item->property }}</li>
                        <li class="list-group-item">{{ $item->departing }}</li>
                        <li class="list-group-item">{{ $item->days }}</li>
                        <li class="list-group-item">{{ $item->details }}</li>
                        <li class="list-group-item">{{ $item->discount }}</li>
                    </ul>
                    <div class="card-footer">
                        {{ $item->price }}
                    </div>
                </div>
                @endforeach    

            </div>
        </div>
    </div>
@endsection