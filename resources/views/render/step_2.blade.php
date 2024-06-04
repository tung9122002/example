@extends('layouts.layout')

@section('content')

    <div class="row text-center">
        <div class="col-sm border">
            <div class="text-dark" >
                Step 1
            </div>
        </div>
        <div class="col-sm border active">
            <a class="text-dark" >
                Step 2
            </a>
        </div>
        <div class="col-sm border">
            <a class="text-dark" >
                Step 3
            </a>
        </div>
        <div class="col-sm border">
            <a class="text-dark" >
                Review
            </a>
        </div>
    </div>
    <div class="mt-3">
        <form method="GET" action="{{ route('step', ['tab' => 'step_3']) }}">
            <div class="form-group">
                <label class="input-label">Please Select a Restaurant</label>
                <select class="form-control" name="restaurant" required>
                    <option value="">---- Choose Restaurant ----</option>
                    @foreach($restaurantsResult as $key => $restaurant)
                        <option value="{{$restaurant}}">{{$restaurant}}</option>
                    @endforeach
                </select>

            </div>
            <div class="btn--container d-flex justify-content-between mt-4">
                <button type="button" id="previous_btn" class="btn btn--reset">Previous</button>
                <button type="submit" class="btn btn--primary submitBtn">Next</button>
            </div>
        </form>
    </div>
@endsection
@section('script')
    <script>
        document.getElementById('previous_btn').addEventListener('click', function() {
            window.history.back();
        });
    </script>
@endsection
