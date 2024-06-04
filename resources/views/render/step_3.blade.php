<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
        .active {
            background-color: cadetblue; /* Màu nền mặc định khi được chọn */
            color: #ffffff; /* Màu chữ mặc định khi được chọn */
        }
    </style>
</head>
<body class="antialiased">
<div class="container mt-2">
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
</div>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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
