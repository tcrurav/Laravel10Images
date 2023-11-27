<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Models\Bicycles;

use App\Http\Controllers\Controller;

class BicycleController extends Controller
{
    public function index()
    {
        $bicycles = Bicycles::all();
        return response()->json($bicycles);
    }

    public function store(Request $request)
    {
        $image = $request->file('image');
        $imageName = time().'.'.$image->extension();
        $imagePath = public_path(). '/images';

        $image->move($imagePath, $imageName);

        $bicycle = new Bicycles;
        $bicycle->brand = $request->brand;
        $bicycle->model = $request->model;
        $bicycle->image = $imageName;
        $bicycle->save();

        return response()->json([
            "message" => "Bicycle added"
        ]);
    }
}
