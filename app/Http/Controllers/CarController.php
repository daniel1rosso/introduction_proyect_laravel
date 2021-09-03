<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use App\Models\User;

/**
 * Class CarController
 * @package App\Http\Controllers
 */
class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::with('user')->paginate();
     
        return view('car.index', compact('cars'))
            ->with('i', (request()->input('page', 1) - 1) * $cars->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $car = new Car();

        $users = User::all();
        $users_select=array("0"=>"Seleccione una opcion correcta");
        foreach ($users as $user) {
            array_push($users_select,$users_select[$user->id] = $user->name);
        }
        array_splice($users_select,-1);
        
        return view('car.create', compact('car','users_select'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Car::$rules);

        $car = Car::create($request->all());

        return redirect()->route('cars.index')
            ->with('success', 'Car created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car = Car::find($id);

        return view('car.show', compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car = Car::find($id);

        $users = User::all();
        $users_select=array("0"=>"Seleccione una opcion correcta");
        foreach ($users as $user) {
            array_push($users_select,$users_select[$user->id] = $user->name);
        }
        array_splice($users_select,-1);
        
        return view('car.edit', compact('car','users_select'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Car $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        request()->validate(Car::$rules);

        $car->update($request->all());

        return redirect()->route('cars.index')
            ->with('success', 'Car updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $car = Car::find($id)->delete();

        return redirect()->route('cars.index')
            ->with('success', 'Car deleted successfully');
    }
}
