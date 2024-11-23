<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Resources\BookingResource;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
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
