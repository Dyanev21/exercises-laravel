<?php
/**
 * Created by PhpStorm.
 * User: mitko
 * Date: 5.2.18
 * Time: 10:33
 */

namespace App\Http\Controllers;

use App\Models\Car;
use SebastianBergmann\CodeCoverage\Report\Html\Facade;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarsController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        $cars = $user->cars;

        return view('cars.index', ['cars' => $cars]);
    }

    public function create()
    {
        return view('cars.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' =>'required|max:50'
        ]);


        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }
        
        Car::create([
            'name' => $request->get('name'),
            'user_id' => Auth::user()->id
        ]);

        return redirect('/cars');
    }
}