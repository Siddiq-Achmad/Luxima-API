<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Location;
use Illuminate\Http\Request;
use App\Http\Resources\LocationResource;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $location = Location::all();
        $length = count($location);
        if (!empty($location)) {
            return response()->json([
                'status' => 'success',
                'message' => 'Data Location',
                'data' => LocationResource::collection($location),
                'length' => $length
            ], 200);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Data Location Not Found',
            ], 404);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        //
        $location = Location::whereHas('vendors')->where('slug', $slug)->first();


        if (!empty($location)) {
            $length = $location->count;
            return response()->json([
                'status' => 'success',
                'message' => 'Data Location',
                'data' => new LocationResource($location),
                'length' => $length
            ], 200);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Data Location Not Found',
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Location $location)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Location $location)
    {
        //
    }
}
