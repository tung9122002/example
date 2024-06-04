<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StepController extends Controller
{
    protected $dishesJson;

    public function __construct()
    {
        $this->dishesJson = app('dishesJson');
    }
    public function step(Request $request, $tab='step_1'){
        if($tab == 'step_1')
        {
            return view('render.step_1');
        }
        else if($tab == 'step_2')
        {
            $restaurantsResult = [];
            foreach ($this->dishesJson->dishes as $dish) {
                if (in_array($request->meal, $dish->availableMeals)) {
                    $restaurantsResult[$dish->restaurant] = $dish->restaurant;
                }
            }
            // Save data to session
            $request->session()->put('meal', $request->meal);
            $request->session()->put('people', $request->qty);

            return view('render.step_2',compact('restaurantsResult'));
        }
        else if($tab == 'step_3')
        {
            $filteredDishes = array_filter($this->dishesJson->dishes, function ($dish) use($request) {
                return $dish->restaurant === $request->restaurant && in_array("lunch", $dish->availableMeals);
            });
            // Save restaurant to session
            $request->session()->put('restaurant', $request->restaurant);
            return view('render.step_3',compact('filteredDishes'));
        }
        else if($tab == 'review')
        {
            $dishData = [];
            if ($request->has('dishes') && $request->has('services')) {
                foreach ($request->dishes as $index => $dish) {
                    $dishData[] = [
                        'name' => $dish,
                        'servings' => $request->services[$index]
                    ];
                }
            }

            // Save dishes to session
            $request->session()->put('dishes', $dishData);

            // Collect all data for review
            $reviewData = [
                'meal' => $request->session()->get('meal'),
                'people' => $request->session()->get('people'),
                'restaurant' => $request->session()->get('restaurant'),
                'dishes' => $request->session()->get('dishes', [])
            ];

            return view('render.review', compact('reviewData'));
        }
    }
    public function submit(Request $request){
        // gửi submit
        $request->session()->forget(['meal', 'people', 'restaurant', 'dishes']);

        $request->session()->flash('success', 'Submit thành công!');

        return redirect()->route('step', ['tab' => 'step_1']);
    }
}
