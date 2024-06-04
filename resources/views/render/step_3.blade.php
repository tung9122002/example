@extends('layouts.layout')

@section('content')

    <div class="row text-center">
        <div class="col-sm border">
            <div class="text-dark" >
                Step 1
            </div>
        </div>
        <div  class="col-sm border">
            <div  class="text-dark">
                Step 2
            </div>
        </div>
        <div class="col-sm border active">
            <div  class="text-dark">
                Step 3
            </div>
        </div>
        <div class="col-sm border">
            <div  class="text-dark">
                Review
            </div>
        </div>
    </div>
    <form method="GET" action="{{ route('step', ['tab' => 'review']) }}">
        <div class="mt-3 row">
            <div class="mt-10 col-md-12" id="price-time-fields">
                <div class="d-flex justify-content-between ml-3">
                    <div class="form-group col-md-6">
                        <label for="dish_1" class="input-label">Please Select a dish</label>
                        <select class="form-control" name="dishes[]" id="dish_1" required>
                            <option value="">---- Choose ----</option>
                            @foreach($filteredDishes as $dish)
                                <option value="{{$dish->name}}">{{$dish->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="service_1" class="input-label">Please Enter no of servings</label>
                        <input class="form-control" name="services[]" id="service_1" type="number" value="1" min="1" />
                    </div>
                </div>
            </div>
            <div id="add-price-time-btn" class="row p-3 mr-1 d-flex ml-4">
                <button type="button" class="btn btn--primary btn-outline-primary">Thêm</button>
            </div>
        </div>
        <div class="btn--container d-flex justify-content-between mt-4">
            <button type="button" id="previous_btn" class="btn btn--reset">Previous</button>
            <button type="submit" class="btn btn--primary submitBtn">Next</button>
        </div>
    </form>
@endsection
@section('script')
    <script>
        document.getElementById('previous_btn').addEventListener('click', function() {
            window.history.back();
        });
        var priceTimeFields = document.getElementById('price-time-fields');
        var addPriceTimeBtn = document.getElementById('add-price-time-btn');
        var priceIndex = 2;
        var filteredDishes = @json($filteredDishes);

        // Function to disable selected options
        function disableSelectedOptions() {
            var selectedValues = [];
            var selectBoxes = document.querySelectorAll('select[name="dishes[]"]');
            selectBoxes.forEach(function(selectBox) {
                if (selectBox.value) {
                    selectedValues.push(selectBox.value);
                }
            });

            selectBoxes.forEach(function(selectBox) {
                var options = selectBox.options;
                for (var i = 0; i < options.length; i++) {
                    if (selectedValues.includes(options[i].value) && options[i].value !== selectBox.value) {
                        options[i].disabled = true;
                    } else {
                        options[i].disabled = false;
                    }
                }
            });
        }

        addPriceTimeBtn.addEventListener('click', function() {
            var newPriceField = document.createElement('div');
            newPriceField.innerHTML = `
            <div class="mt-10 col-md-12">
                <div class="d-flex justify-content-between">
                    <div class="form-group col-md-6">
                        <label for="dish_${priceIndex}" class="input-label">Please Select a dish</label>
                        <select class="form-control" name="dishes[]" id="dish_${priceIndex}" required>
                            <option value="">---- Choose ----</option>
                            @foreach($filteredDishes as $dish)
            <option value="{{$dish->name}}">{{$dish->name}}</option>
                            @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="service_${priceIndex}" class="input-label">Please Enter no of servings</label>
                        <input class="form-control" name="services[]" id="service_${priceIndex}" type="number" value="1" min="1" />
                    </div>
                    <button style="margin-top: 32px; height: 41px; margin-left: 20px;" type="button" class="btn btn-danger delete-price-time-btn" data-price-time-index="${priceIndex}">Xóa</button>
                </div>
            </div>
        `;
            priceTimeFields.appendChild(newPriceField);

            // Attach a change event listener to the new select box
            var newSelectBox = newPriceField.querySelector('select[name="dishes[]"]');
            newSelectBox.addEventListener('change', disableSelectedOptions);

            // Attach a click event listener to the delete button
            var deletePriceTimeBtn = newPriceField.querySelector('.delete-price-time-btn');
            deletePriceTimeBtn.addEventListener('click', function() {
                newPriceField.remove();
                disableSelectedOptions();
            });

            // Update the disable options logic
            disableSelectedOptions();

            priceIndex++;
        });

        // Initial call to set up disable options
        window.onload = function() {
            disableSelectedOptions();
            document.querySelectorAll('select[name="dishes[]"]').forEach(function(selectBox) {
                selectBox.addEventListener('change', disableSelectedOptions);
            });
        };
    </script>
@endsection


