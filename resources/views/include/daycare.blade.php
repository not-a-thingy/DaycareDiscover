@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach($data as $card)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 style="font-weight:bold; "class="card-title">{{ $card->name }}</h5>
                        <br><hr><br>
                        <div class="row">
                            <div class="col-4">
                                <p class="card-text">Contact No:</p>
                                <p class="card-text">Email:</p>
                                <p class="card-text">Rating:</p>
                            </div>
                            <div class="col-8 text-right">
                                <p class="card-text">{{ $card->contact }}</p>
                                <p class="card-text">{{ $card->email }}</p>
                                <p class="card-text">{{ $card->rating }}</p>
                            </div>
                        </div>
                        <br>
                        <a href="{{ url('/details_daycare/' . $card->id . '/show') }}" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
