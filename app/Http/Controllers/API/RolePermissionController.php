<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Http\Controllers\Controller;
use App\Http\Resources\RoleResource;
use App\Http\Resources\PermissionResource;

class RolePermissionController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:api'); // Pastikan user terautentikasi
    }

    // Ambil semua roles
    public function roles()
    {
        $roles = Role::with('permissions')->get();
        return RoleResource::collection($roles);
    }

    // Ambil semua permissions
    public function permissions()
    {
        $permissions = Permission::all();
        return PermissionResource::collection($permissions);
    }
}
