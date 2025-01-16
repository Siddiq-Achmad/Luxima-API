<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Location;
use Illuminate\Http\Request;
use App\Http\Resources\LocationResource;

/**
 * @OA\Tag(
 *     name="Location",
 *     description="API Endpoints for Locations"
 * )
 *
 *
 * 
 * @OA\Schema(
 *     schema="Location",
 *     type="object",
 *     title="Location",
 *     required={"id", "name", "slug", "location"},
 *     @OA\Property(property="id", type="integer", description=" ID vendor"),
 *     @OA\Property(property="name", type="string", description="Location name"),
 *     @OA\Property(property="slug", type="string", description="Unique slug for vendor"),
 *     @OA\Property(property="description", type="string", description="Location description"),
 *     @OA\Property(property="location", type="string", description="Location location"),
 *     @OA\Property(property="category", type="string", description="Location category"),
 *     @OA\Property(property="created_at", type="string", format="date-time", description="Location created at"),
 *     @OA\Property(property="updated_at", type="string", format="date-time", description="Location updated at"),
 *     @OA\Property(property="deleted_at", type="string", format="date-time", description="Location deleted at"),
 * )
 */

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    //Get Data API Locations
    /**
     * @OA\Get(
     *     path="/locations",
     *     tags={"Location"},
     *     summary="Show all Locations",
     *     description="Retrieve a list of all Locations.",
     *     @OA\Response(
     *         response=200,
     *         description="Successfully retrieved Locations",
     *         @OA\JsonContent(
     *             type="array",
     *             @OA\Items(ref="#/components/schemas/Location")
     *         )
     *     ),
     *     @OA\Response(
     *         response=401,
     *         description="Unauthorized, token tidak valid"
     *     )
     * )
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
    /**
     * @OA\Get(
     *     path="/location/{slug}",
     *     tags={"Location"},
     *     summary="Show detail location by slug",
     *     description="Retrieve detail data location by slug.",
     *     @OA\Parameter(
     *         name="slug",
     *         in="path",
     *         required=true,
     *         description="Unique location slug",
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Data Vendor Detail",
     *         @OA\JsonContent(ref="#/components/schemas/Location")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Location not found"
     *     )
     * )
     */
    public function show($slug)
    {
        //

        $location = Location::whereHas('vendors')->where('slug', $slug)->first();

        if (!empty($location)) {

            return response()->json([
                'status' => 'success',
                'message' => 'Data Location',
                'data' => new LocationResource($location),
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
