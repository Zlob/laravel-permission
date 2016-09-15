<?php

namespace Spatie\Permission\Controllers\Api;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\RoleHasPermission;

class RolePermissionController extends Controller
{

    public function index(Request $request, RoleHasPermission $roleHasPermissionModel, $roleId)
    {
        $rolePermissions = $roleHasPermissionModel->where('role_id', $roleId)->get();
        return $rolePermissions;
    }

    public function show(Request $request, RoleHasPermission $roleHasPermissionModel, $roleId, $id)
    {
        $rolePermissions = $roleHasPermissionModel->findOrFail($id);
        return $rolePermissions;
    }

    public function store(Request $request, RoleHasPermission $roleHasPermissionModel, $roleId)
    {
        $data = $request->all();
        $rolePermissions = $roleHasPermissionModel->create($data);
        return $rolePermissions;
    }

    public function update(Request $request, RoleHasPermission $roleHasPermissionModel, $roleId, $id)
    {
        $data = $request->all();
        $rolePermissions = $roleHasPermissionModel->findOrFail($id);
        $rolePermissions->update($data);
        return $rolePermissions;
    }

    public function destroy(Request $request, RoleHasPermission $roleHasPermissionModel, $roleId, $id)
    {
        $rolePermissions = $roleHasPermissionModel->findOrFail($id);
        $rolePermissions->delete();
        return $rolePermissions;
    }

}