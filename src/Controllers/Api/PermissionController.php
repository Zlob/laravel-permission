<?php

namespace Spatie\Permission\Controllers\Api;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use App\Http\Controllers\Controller;

class PermissionController extends Controller
{

    public function index(Request $request, Permission $permissionModel)
    {
        $permissions = $permissionModel->get();
        return $permissions;
    }

    public function show(Request $request, Permission $permissionModel, $id)
    {
        $permission = $permissionModel->findOrFail($id);
        return $permission;
    }

    public function store(Request $request, Permission $permissionModel)
    {
        $data = $request->all();
        $permission = $permissionModel->create($data);
        return $permission;
    }

    public function update(Request $request, Permission $permissionModel, $id)
    {
        $data = $request->all();
        $permission = $permissionModel->findOrFail($id);
        $permission->update($data);
        return $permission;
    }

    public function destroy(Request $request, Permission $permissionModel, $id)
    {
        $permission = $permissionModel->findOrFail($id);
        $permission->delete();
        return $permission;
    }



}