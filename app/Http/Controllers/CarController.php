<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::paginate(5);

        return view('panel.cars.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panel.cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            $request->request->add(['test' => 1]);
            $imagename = $request->image->getClientOriginalName();
            $request->image->storeAs('images', $imagename, 'public');
        }
        $request->request->add(['slug' => Str::slug($request->name, '-')]);

        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:cars',
            'type' => 'required',
            'image' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
        ]);

        Car::create($request->all());

        return redirect()->route('cars.index')->with('success', 'Car created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Car $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        return view('panel.cars.show', compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Car $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        return view('panel.cars.edit', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Car $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'type' => 'required',
            'image' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);

        $car->update($request->all());

        return redirect()->route('panel.cars.index')->with('success', 'Car updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Car $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        $car->delete();

        return redirect()->route('panel.cars.index')->with('success', 'Car deleted successfully');
    }

    protected function uploadImage(Request $request)
    {
        $request->image->store('images', 'public');

    }
}