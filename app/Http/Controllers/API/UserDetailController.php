<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserDetail;
use App\Http\Resources\UserDetailResource;


class UserDetailController extends Controller
{
    //
    // Menampilkan semua user details
    public function index()
    {
        $userDetails = UserDetail::all();
        return UserDetailResource::collection($userDetails);
    }

    // Menampilkan detail user berdasarkan ID
    public function show($id)
    {
        $userDetail = UserDetail::findOrFail($id);
        return new UserDetailResource($userDetail);
    }

    // Menyimpan user detail baru
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'phone' => 'nullable|string|max:15',
            'address' => 'nullable|string|max:255',
            'birth_date' => 'nullable|date',
            'gender' => 'nullable|in:male,female,other',
            'avatar' => 'nullable|string|max:255',
            'nationality' => 'nullable|string|max:100',
            'languages' => 'nullable|string|max:100',
            'occupation' => 'nullable|string|max:100',
            'bio' => 'nullable|string',
            'social_media' => 'nullable|array',
            // Validasi lainnya
        ]);

        $userDetail = UserDetail::create($validatedData);
        return new UserDetailResource($userDetail);
    }

    // Memperbarui user detail
    public function update(Request $request, $id)
    {
        $userDetail = UserDetail::findOrFail($id);

        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'phone' => 'nullable|string|max:15',
            'address' => 'nullable|string|max:255',
            'birth_date' => 'nullable|date',
            'gender' => 'nullable|in:male,female,other',
            'avatar' => 'nullable|string|max:255',
            'nationality' => 'nullable|string|max:100',
            'languages' => 'nullable|string|max:100',
            'occupation' => 'nullable|string|max:100',
            'bio' => 'nullable|string',
            'social_media' => 'nullable|array',
            // Validasi lainnya
        ]);

        $userDetail->update($validatedData);
        return new UserDetailResource($userDetail);
    }

    // Menghapus user detail
    public function destroy($id)
    {
        $userDetail = UserDetail::findOrFail($id);
        $userDetail->delete();

        return response()->json(['message' => 'User detail deleted successfully.']);
    }
}
