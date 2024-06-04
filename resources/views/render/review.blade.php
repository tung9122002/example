@extends('layouts.layout')

@section('content')
    <div class="row text-center">
        <div class="col-sm border">
            <div class="text-dark">
                Step 1
            </div>
        </div>
        <div class="col-sm border">
            <div class="text-dark" >
                Step 2
            </div>
        </div>
        <div class="col-sm border">
            <div class="text-dark" >
                Step 3
            </div>
        </div>
        <div class="col-sm border active">
            <div class="text-dark" >
                Review
            </div>
        </div>
    </div>
    <form method="POST" action="{{ route('submit') }}">
        @csrf
        <div class="mt-3">
            <div class="row">
                <h4 class="mt-4 col-md-6">Meal</h4>
                <h4 class="mt-4 col-md-6">{{$reviewData['meal']}}</h4>
            </div>
            <div class="row">
                <h4 class="mt-4 col-md-6">People</h4>
                <h4 class="mt-4 col-md-6">{{$reviewData['people']}}</h4>
            </div>
            <div class="row">
                <h4 class="mt-4 col-md-6">Restaurant</h4>
                <h4 class="mt-4 col-md-6">{{$reviewData['restaurant']}}</h4>
            </div>
            <div class="row">
                <h4 class="mt-4 col-md-6">Dishes</h4>
                <ul class="list-group col-md-6">
                    @foreach($reviewData['dishes'] as $dish)
                        <li class="list-group-item">{{$dish['name'] . ' - ' . $dish['servings']}}</li>
                    @endforeach
                </ul>
            </div>
            <div class="btn--container d-flex justify-content-between mt-4">
                <button type="button" id="previous_btn" class="btn btn--reset">Previous</button>
                <button type="submit" class="btn btn--primary submitBtn">Submit</button>
            </div>
        </div>
    </form>
@endsection
@section('script')
    <script>
        document.getElementById('previous_btn').addEventListener('click', function() {
            window.history.back();
        });
    </script>
@endsection
