<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Resources\BookingResource;


/**
 * @OA\Tag(
 *     name="Booking",
 *     description="API Endpoints for Bookings"
 * )
 *
 *
 * @OA\Schema(
 *     schema="Booking",
 *     type="object",
 *     title="Booking",
 *     required={"id", "name", "slug", "location"},
 *     @OA\Property(property="id", type="integer", description=" ID Booking"),
 *     @OA\Property(property="user_id", type="integer", description="User ID Booking"),
 *      @OA\Property(property="vendor_id", type="integer", description="Vendor ID Booking"),
 *      @OA\Property(property="service_id", type="integer", description="Service ID Booking"),
 *      @OA\Property(property="event_id", type="integer", description="Event ID Booking"),
 *      @OA\Property(property="location_id", type="integer", description="Location ID Booking"),
 *      @OA\Property(property="name", type="string", description="Booking name"),
 *      @OA\Property(property="total_amount", type="integer", description="Booking total amount"),
 *     @OA\Property(property="created_at", type="string", format="date-time", description="Booking created at"),
 *     @OA\Property(property="updated_at", type="string", format="date-time", description="Booking updated at"),
 * )
 */

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    //Get Data API Bookings
    /**
     * @OA\Get(
     *     path="/bookings",
     *     tags={"Booking"},
     *     summary="Show all Bookings",
     *     description="Retrieve a list of all Bookings.",
     *     @OA\Response(
     *         response=200,
     *         description="Successfully retrieved Bookings",
     *         @OA\JsonContent(
     *             type="array",
     *             @OA\Items(ref="#/components/schemas/Booking")
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
        $booking = Booking::with('user', 'vendor', 'service', 'event', 'location')->get();
        $length = count($booking);

        if (!empty($booking)) {
            return response()->json([
                'status' => 'success',
                'message' => 'Data Booking',
                'data' => BookingResource::collection($booking),
                'length' => $length
            ], 200);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Data Booking Not Found',
                'data' => [],
                'length' => 0
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
     *     path="/booking/{id}",
     *     tags={"Booking"},
     *     summary="Show detail booking by id",
     *     description="Retrieve detail data booking by id.",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="Unique booking id",
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Data Booking Detail",
     *         @OA\JsonContent(ref="#/components/schemas/Booking")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Booking not found"
     *     )
     * )
     */
    public function show($id)
    {
        //
        $booking = Booking::with('user', 'vendor', 'service', 'event', 'location')->where('id', $id)->first();

        if (!empty($booking)) {
            return response()->json([
                'status' => 'success',
                'message' => 'Data Booking',
                'data' => new BookingResource($booking)
            ], 200);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Data Booking Not Found',
                'data' => [],
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
