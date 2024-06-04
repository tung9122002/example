@extends('layouts.layout')

@section('content')
    <div class="row text-center">
        <div class="col-sm border active">
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
        <div class="col-sm border">
            <div class="text-dark">
                Review
            </div>
        </div>
    </div>
    <div class="mt-3">
        <form method="GET" action="{{ route('step', ['tab' => 'step_2']) }}">
            <div class="form-group">
                <label class="input-label">Please Select a meal</label>
                <select class="form-control" name="meal" required>
                    <option value="">---- Choose ----</option>
                    <option value="breakfast">Breakfast</option>
                    <option value="lunch">Lunch</option>
                    <option value="dinner">Dinner</option>
                </select>
            </div>
            <div class="form-group">
                <label class="input-label">Please Enter Number of people</label>
                <input class="form-control" name="qty" type="number" value="1" min="1" max="10" required/>
            </div>
            <div class="btn--container d-flex justify-content-end">
                <button type="submit" class="btn btn--primary submitBtn">Next</button>
            </div>
        </form>
        @if(session('success'))
            <div class="mt-2 alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    </div>
@endsection
